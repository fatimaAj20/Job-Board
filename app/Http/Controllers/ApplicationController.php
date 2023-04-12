<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Models\jobApplication;
use App\Models\jobPost;
use App\Models\requiredSkills;
use App\Models\seeker;
use App\Models\seekerSkills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    
    function jobRequestView(Request $request){
        $request=jobPost::where("vacant",0)->get();
        // \Log:: info($request);
        $user=Auth::user();
        $employer=employer::where("userId",$user->id)->get();
        // \Log::info($employer);
        return view("JobRequests",["requests"=>$request,"employer"=>$employer[0]]);

    }
    function listSeekers($id){
        $seekersId=jobApplication::where("jobId",$id)->get();
        $seekers=[];
        foreach($seekersId as $seekerId){
           $seekers[]=seeker::find($seekerId->seekerId);
        }
        \Log::info($seekers);
        $user=Auth::user();
        $employer=employer::where("userId",$user->id)->get();
     
        $matches=0;
        return view("SeekersList",["seekers"=>$seekers,"id"=>$id,"matches"=>$matches,"employer"=>$employer[0]]);

    }
    function BestMatches($id){
        //getall applicatnts
        $applications=jobApplication::where("jobId",$id)->get();
        \Log::info(("(.....)"));
        \Log::info($applications);
    
        //get asscociative array containung the info of each seeker and the number of required skills it matches
        $seekersInfo=array();
        foreach($applications as $application){
            $seekerSkills=seekerSkills::where("seekerId",$application->seekerId)->get();
            $count=DB::select("select get_skill_matches($id,$application->seekerId) as count");
            $seekersInfo[$application->seekerId]=$count[0]->count;
            }
        \Log::info(("(.....)"));
        \Log::info($seekersInfo );


        //get the first 5 seekers that have skills best matches the required skills
        $seekers=array();
        arsort($seekersInfo);
        $keys=array_keys($seekersInfo);
        for($i=0;$i<sizeof($keys) && $i<5; $i++){
            $seekers[]=seeker::find($keys[$i]);
        }
        $matches=1;
        $user=Auth::user();
        $employer=employer::where("userId",$user->id)->get();
        \Log::info($employer[0]);
        return view("SeekersList",["seekers"=>$seekers,"matches"=>$matches,"employer"=>$employer[0]]);

    }
}
