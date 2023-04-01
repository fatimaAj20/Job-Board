<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Models\User;
use Illuminate\Http\Request;

class employerController extends Controller
{
    function index($id){
        $emp=employer::find($id);
        $user=User::find($emp->userId);
        return view("employerDetails",["employer"=>$emp ,"user"=>$user]);
    }
}
