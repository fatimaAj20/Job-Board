<?php

namespace App\Http\Controllers;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class RegesterController extends Controller
{
    public function index(){
        return view("regester.index");

    }

    public function forgot(){
        return view("regester.forgot");

    }

    public function create(Request $Request){
        $Request->validate([
            'first_name'=> ["required"],
            'last_name'=> [ 'required'],
            'email'=> ['required','email'],
            'password'=> [ 'required', 'confirmed'],
            'role'=> ['required'],
        ]
        );

        $info =[
            'name'=> $Request->input('first_name')." ". $Request->input('last_name'),
            'email'=> $Request->input('email'),
            'password'=>bcrypt($Request->input('password')),
            'role'=>$Request->input('role')
        ];

        $user= User::create($info);
        if ($user and $user->id >0 )
        {
            return redirect(route('login' ));
        }
    }
}
