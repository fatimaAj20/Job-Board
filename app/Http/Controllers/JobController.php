<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Models\requiredSkills;
use App\Models\skill;
use Illuminate\Http\Request;
use App\Models\jobPost;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    function index(Request $request)
    {
        $filter = $request->get("filter", 0);
        $request = jobPost::where("vacant", $filter)->get();
        $user = Auth::user();
        $employer = employer::where("userId", $user->id)->get();
        return view("jobPosts", ["requests" => $request, "employer" => $employer[0]]);
    }
    function index2()
    {
        $skills = skill::all();
        $user = Auth::user();
        $employer = employer::where("userId", $user->id)->get();
        return view("addJob", ["job" => null, "skills" => $skills, "employer" => $employer[0]]);
    }
    function index3($id)
    {
        $job = jobPost::find($id);
        $skills = skill::all();
        $requiredSkills = requiredSkills::where('jobId', $id)->get();
        $user = Auth::user();
        $employer = employer::where("userId", $user->id)->get();
        return view("addJob", ["job" => $job, "skills" => $skills, "requiredSkills" => $requiredSkills, "employer"=>$employer[0]]);
    }
    function create(Request $Request)
    {
        $Request->validate(
            [
                'title' => ["required"],
                'description' => ['required'],
                'location' => ['required'],
                'salary' => ['required'],
                'vacant' => ['required'],
                'skills' => ['required'],
                'category' => ['required']
            ]
        );

        $user = Auth::user();
        $employer = employer::where("userId", $user->id)->get();
        $info = [
            'employerId' => $employer[0]->id,
            'title' => $Request->input('title'),
            'description' => $Request->input('description'),
            'location' => $Request->input('location'),
            'salary' => $Request->input('salary'),
            'applied' => 0,
            'vacant' => $Request->input('vacant'),
            'category' => $Request->input('category'),
        ];

        $job = jobPost::create($info);
        $skills = $Request->input('skills');
        if ($job and $job->id > 0) {
            foreach ($skills as $skill) {
                $id = skill::where("name", $skill)->get()[0]->id;
                $reqSkills = [
                    'jobId' => $job->id,
                    'skillId' => $id,
                    'importance' => "",
                ];
                requiredSkills::create($reqSkills);
            }
            return redirect("/jobPosts");
        }
    }

    function show($id)
    {
        $job = jobPost::find($id);
        $user = Auth::user();
        $employer = employer::where("userId", $user->id)->get();
        $reqSkills = requiredSkills::where("jobId", $id)->get();
        $skills = "";
        foreach ($reqSkills as $reqSkill) {
            if ($skills != "") $skills .= ", ";
            $skills .= skill::find($reqSkill->skillId)->name;
        }
        return view("jobDetails", ["job" => $job, "employer" => $employer[0], "skills" => $skills]);
    }

    function delete($id)
    {
        requiredSkills::where('jobId', $id)->delete();
        $job = jobPost::find($id);
        $job->delete();
        return redirect("/jobPosts");
    }

    function save($id, Request $Request)
    {
        $job = jobPost::find($id);
        $job->title = $Request->input('title');
        $job->description = $Request->input('description');
        $job->location = $Request->input('location');
        $job->salary = $Request->input('salary');
        $job->vacant = $Request->input('vacant');
        $job->category = $Request->input('category');
        requiredSkills::where("jobId", $job->id)->delete();
        $skills = $Request->input('skills');
        foreach ($skills as $skill) {
            $id = skill::where("name", $skill)->get()[0]->id;
            $reqSkills = [
                'jobId' => $job->id,
                'skillId' => $id,
                'importance' => "",
            ];
            requiredSkills::create($reqSkills);
        }
        $job->save();
        return redirect("/jobPosts/details/" . $job->id);
    }

    //function to give sugestions of  posts to a specific seeker this will be called in the home of the seeker
    //once logged in
    function  matching($seeker)
    {
        // should implement a way to make the jobs list
        return $jobs;
    }
}
