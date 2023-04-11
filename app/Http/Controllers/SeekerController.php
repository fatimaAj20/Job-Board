<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobPost;
use App\Models\seeker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\skill;

class SeekerController extends Controller
{

    // once logged in
    public function home()
{
    return view('seeker.home');
}


//when searching fror a specific job using the location category or title
public function search(Request $request)
{
    //get input
    $location = $request->input('location') ?? null;
    $category = $request->input('category') ?? null;
    $title = $request->input('title') ?? null;

    //find results

    $jobs = JobPost::when($location, function ($query, $location) {
            return $query->where('location',$location);
        })
        ->when($category, function ($query, $category) {
            return $query->where('category', $category);
        })
        ->when($title, function ($query, $title) {
            return $query->where('title', $title);
        })
        ->get();
        //pass them to the view to show

    return view('seeker.search', ['jobs' => $jobs]);
}



//when viewing the profile
public function profile()
{

      // this function will get the array of skills for the specific user
      //then it will add them to the user array and then pass it to the profile
      //get user
      $user=Auth::user();
      //get his skills
      $userSkills = DB::table('seeker_skills')
      ->join('skills', 'seeker_skills.skill_id', '=', 'skills.id')
      ->where('seeker_skills.user_id', '=', $user->id)
      ->select('skills.name')
      ->get();

        $skillsArray = array();

        foreach ($userSkills as $skill) {
        array_push($skillsArray, $skill->name);
        }
        //add to the user array and pass it on t the view to use it

        $user['skills']= $skillsArray;
        //get the resume


        $seeker = Seeker::where('userId', $user->id)->first();
        if ($seeker)
        {
           $resume = $seeker->resume;
           $profile_picture=$seeker->profile_picture;
           $about= $seeker->about;
        }else
        {
            $resume=null;
        }
        $user['resume']= $resume;
        $user['profile_picture']= $profile_picture;
        $user['about']=$about;



        return view('seeker.profile', ['user' => $user]);



}

// when they press on the edit button
public function edit()
{

      //get user
      $user=Auth::user();
      //get his skills
      $userSkills = DB::table('seeker_skills')
      ->join('skills', 'seeker_skills.skill_id', '=', 'skills.id')
      ->where('seeker_skills.user_id', '=', $user->id)
      ->select('skills.name')
      ->get();

        $skillsArray = array();

        foreach ($userSkills as $skill) {
        array_push($skillsArray, $skill->name);
        }
        //add to the user array and pass it on t the view to use it

        $user['skills']= $skillsArray;
        //get the resume


        $seeker = Seeker::where('userId', $user->id)->first();
        if ($seeker)
        {
           $resume = $seeker->resume;
           $profile= $seeker->profile_picture;
           $location= $seeker->location;
           $birthday=$seeker->birthday;
        }else
        {
            $resume=null;
            $profile=null;
            $birthday=null;
            $location=null;
        }
        $user['birthday']= $birthday;
        $user["profile_picture"]=$profile;
        $user["location"]=$location;
        $user['resume']= $resume;



    return view('seeker.edit', ['user'=>$user]);
}

// after the form is submitted
public function editSave(Request $request)
{

        $user = Auth::user();
        $userId = $user->id;

        // Update users table
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->save();

        // Update seekers table
        $seeker = Seeker::where('userId', $userId)->first();
        $seeker->about = $request->input('about');
        $seeker->birthday = $request->input('birthday');
        $seeker->location = $request->input('location');

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = $userId . '.' . $file->getClientOriginalExtension();
            $storagePath = storage_path('public/profile_pictures');
            $file->move($storagePath, $filename);
            $path = '/storage/profile_pictures/' . $filename;
            $seeker->profile_picture =  $path;;
        }

        // Handle resume upload
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = $userId . '.' . $file->getClientOriginalExtension();
            $storagePath = storage_path('public/resumes');
            $file->move($storagePath, $filename);
            $path = '/storage/resumes/' . $filename;
            $seeker->resume =  $path;
        }

        $seeker->save();

        return $this->profile();


}
// this function is to get all the skills found in the data base
public function addSkillForm()
{
    $user=Auth::user();
    //get his skills
    $userSkills = DB::table('seeker_skills')
    ->join('skills', 'seeker_skills.skill_id', '=', 'skills.id')
    ->where('seeker_skills.user_id', '=', $user->id)
    ->select('skills.name')
    ->get();

      $skillsArray = array();

      foreach ($userSkills as $skill) {
      array_push($skillsArray, $skill->name);
      }
      //add to the user array and pass it on t the view to use it

    $user['skills']= $skillsArray;

    $skills = skill::all();
    return view('seeker/addSkill', ['skills'=>$skills , 'user'=>$user]);
}

// this function is used to add skills to the profile of a user
public function addSkill(Request $request) {
    $request->validate([
        'skill'=>['required'],
    ]);
    $user_id = Auth::id(); // Get the current user's ID
    $skill_id = $request->skill; // Get the selected skill's ID from the request

    // Add the skill to the user's profile
    DB::table('seeker_skills')->insert(
       ['user_id' => $user_id, 'skill_id' => $skill_id]
    );

    // Redirect back to the edit profile page
    return redirect('/seeker.editSkills')->with('success', 'Skill added successfully!');
 }



public function matchedSeeker($job){
    // return the list of seekers that match specific job
}

}
