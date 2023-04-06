<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobPost;
use App\Models\seeker;


class SeekerController extends Controller
{
    // once logged in
    public function home()
{
    return view('seeker.home');
}

public function search(Request $request)
{
    $location = $request->input('location') ?? null;
    $category = $request->input('category') ?? null;
    $title = $request->input('title') ?? null;

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

    return view('seeker.search', ['jobs' => $jobs]);
}

//when viewing the profile
public function profile()
{
    return view('seeker.profile');
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
