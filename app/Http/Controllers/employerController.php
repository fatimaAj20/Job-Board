<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Models\notifications;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class employerController extends Controller
{
    function index($id){
        $emp=employer::find($id);
        $user=User::find($emp->userId);
        return view("EmployerProfile",["employer"=>$emp ,"user"=>$user]);
    }

    function index2(){
        $user=Auth::user();
        $employer=employer::where("userId",$user->id)->get();
        return view("Employer",["employer"=>$employer[0]]);
    }

    function ViewProfile($id){
        $employer=employer::find($id);
        $view=1;
        return view("EmployerProfile",["employer"=>$employer ,"view"=>$view]);
    }

    function EditProfile($id){
        $employer=employer::find($id);
        $view=0;
        return view("EmployerProfile",["employer"=>$employer ,"view"=>$view]);
    }

    function SaveProfile($id,Request $Request){
        $employer=employer::find($id);
        $employer->websiteLink=$Request->input('websiteLink');
        $employer->description= $Request->input('description');
        $employer->location=$Request->input('location');
        if(!is_null($Request->logo)){
            $employer->logo=$Request->input('logo');
        }
        $employer->lebanonCreftificateOfIncorporation=$Request->input('lebanonCreftificateOfIncorporation');
        $employer->registrationNumber=$Request->input('registrationNumber');
        $employer->save();
        return redirect("/employer/profile/".$employer->id);
    }
    function EmployerNotifications(){
        $user=Auth::user();
        $employer=employer::where("userId",$user->id)->get();
        $notifications=notifications::where("userId",$user->id)->get();
        return view("notifications",["notifications"=>$notifications,"employer"=>$employer[0]]);
        
    }
}
