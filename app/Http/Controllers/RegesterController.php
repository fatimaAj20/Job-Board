<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\employer;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class RegesterController extends Controller
{
    public function seeker(){
        return view("regester.seeker");

    }
    public function employer(){
        return view("regester.employer");

    }



    public function createSeeker(Request $Request, $role){


        //this function is for creating the account for seeker
        //fill user table then fill the seeker table

        $Request->validate([
            'first_name'=> ["required"],
            'last_name'=> [ 'required'],
            'email'=> ['required','email'],
            'password'=> [ 'required', 'confirmed'],

        ]

        );


        $info =[
            'name'=> $Request->input('first_name')." ". $Request->input('last_name'),
            'email'=> $Request->input('email'),
            'password'=>$Request->input('password'),
            'role'=> '3'
        ];


        $user= User::create($info);



        if ($user and $user->id >0 )
        {
            return redirect(route('login' ));
        }




    }


    public function createCompany(Request $Request, $role){
        //this function is for the regestration of the employers/companies
        // we have to first insert them as users
        //manage their files
        //inset them as companies that and insert their request as well
        //there activity should be set to pending

        $Request->validate([
            'companyName'=> ['required' ],
            'email'=> ['required','email'],
            'password'=> [ 'required', 'confirmed'],

        ]);
        $info =[
            'name'=> $Request->input('companyName'),
            'email'=> $Request->input('email'),
            'password'=>$Request->input('password'),
            'role'=> '2'
        ];

        $user= User::create($info);

        if ($user and $user->id >0 )
        {
            $file = $Request->file('certificate');
            $fileName = $user->id . '.' . $file->getClientOriginalExtension();
            $storagePath = storage_path('app/public/certificates');// should name the folder certificate if not change the name
            $file->move($storagePath, $fileName);
            $path='/storage/certificates/' . $fileName;

            $companyInfo= [
                'userId'=> $user->id ,
                'websiteLink'=> $Request->inpute('website'),
                'description'=> $Request->input('description'),
                'location'=> $Request-> input('location'),
                'active'=> 1, //asuming that 1 is pending
                'registrationNumber'=> $Request->input('registrationNumber'),
                "lebanonCreftificateOfIncorporation"=> $path,

            ];

            $company = employer::create( $companyInfo);

            // if we decided to fill the request table we have to do it here
            /*
            $requestinfo =
            [
                'employerId'=> $company->id,
                'status'=> '1'

            ];

            $request= EmployerRegistrationRequest::create($requestinfo );
            */

            return redirect(route('login' ));


        }


    }


}
