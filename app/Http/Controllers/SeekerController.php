<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobPost;
use App\Models\seeker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        return view('seeker.profile', ['user'=> $user]);
}

// when they press on the edit button
public function editView()
{

    return view('seeker.edit');
}
// after the form is submitted
public function editSave(Request $request)
{


    return view('seeker.edit');
}

//will be used to match the seeker for the job in the sugestions for the employer

public function matchedSeeker($job){
    // return the list of seekers that match specific job
}

}
