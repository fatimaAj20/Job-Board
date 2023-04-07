<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobPost;
use DB;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    function index(Request $request){
        $filter=$request->get("filter",0);
        $request=jobPost::where("vacant",$filter)->get();
        \Log:: info($request);
        \Log:: info($filter);
        return view("jobPosts",["requests"=>$request]);

    }
    function index2(){
        return view("addJob",["job"=>null]);
    }
    function index3($id){
        $job=jobPost::find($id);
        return view("addJob",["job"=>$job ]);
    }
    function create(Request $Request){
        $Request->validate([
            'title'=> ["required"],
            'description'=> [ 'required'],
            'location'=> ['required'],
            'salary'=>['required'],
            'applied'=> [ 'required'],
            'vacant'=> ['required'],
            'skills'=> ['required'],
            'category'=> ['required']

        ]

        );

        // $user=Auth::user();
        $info =[
            'employerId'=>1,
            'title'=> $Request->input('title'),
            'description'=> $Request->input('description'),
            'location'=> $Request->input('location'),
            'salary'=>$Request->input('salary'),
            'applied'=>$Request->input('applied'),
            'vacant'=>$Request->input('vacant'),
            'category'=>$Request->input('category'),

        ];

        $job= jobPost::create($info);
        if ($job and $job->id >0 )
        {
            return redirect("/jobPosts");
        }




    }
    function show($id){
        $job=jobPost::find($id);
        return view("jobDetails",["job"=>$job ]);
    }
    function delete($id){
        $job=jobPost::find($id);
        $job->delete();
        return redirect("/jobPosts");
    }
    function save($id,Request $Request){
        $job=jobPost::find($id);
        $job->title=$Request->input('title');
        $job->description= $Request->input('description');
        $job->location=$Request->input('location');
        $job->salary=$Request->input('salary');
        $job->applied=$Request->input('applied');
        $job->vacant=$Request->input('vacant');
        $job->category=$Request->input('category');
        $job->save();
        return redirect("/jobPosts/details/".$job->id);
    }

    //function to give sugestions of  posts to a specific seeker this will be called in the home of the seeker
    //once logged in
    function  matching($seeker)
    {
        // should implement a way to make the jobs list
        return $jobs;
    }

}
