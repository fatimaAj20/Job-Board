<?php

namespace App\Http\Controllers;

use App\Models\EmployerRegistrationRequest;
use App\Models\User;
use App\Models\employer;
use App\Models\seeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegesterController extends Controller
{
    public function seeker()
    {
        return view("regester.seeker");
    }

    public function employer()
    {
        return view("regester.employer");
    }



    public function createSeeker(Request $Request)
    {


        //this function is for creating the account for seeker
        //fill user table then fill the seeker table
        $Request->validate(
            [
                'first_name' => ["required"],
                'last_name' => ['required'],
                'email' => ['required', 'email'],
                'phoneNumber' => ['required', 'numeric'],
                'password' => ['required', 'confirmed'],
            ]
        );

        $info = [
            'name' => $Request->input('first_name') . " " . $Request->input('last_name'),
            'email' => $Request->input('email'),
            'phoneNumber' => $Request->input('phoneNumber'),
            'password' => bcrypt($Request->input('password')),
            'role' => '3'
        ];

        $user = User::create($info);


        if ($user and $user->id > 0) {

            $seekerInfo =
                [
                    'userId' => $user->id,

                ];
            $seeker = seeker::create($seekerInfo);
            return redirect(route('login'));
        } else {
            return redirect(route('login'));
        }
    }


    public function createCompany(Request $Request)
    {
        //this function is for the regestration of the employers/companies
        // we have to first insert them as users
        //manage their files
        //inset them as companies that and insert their request as well
        //there activity should be set to pending

        $Request->validate([
            'companyName' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'phoneNumber' => ['required'],
            'certificate' => ['required'],


        ]);
        $info = [
            'name' => $Request->input('companyName'),
            'email' => $Request->input('email'),
            'password' => Hash::make($Request->input('password')),

            'role' => '2'
        ];
        if (isset($Request['phoneNumber'])) {
            $info['phoneNumber'] = $Request->input('phoneNumber');
        } else
            $info['phoneNumber'] = '';



        $user = User::create($info);



        if ($user and $user->id > 0) {
            if ($Request->hasFile('certificate')) {
                $file = $Request->file('certificate');


                $fileName = $user->id . '.' . $file->getClientOriginalExtension();
                $storagePath = storage_path('public/certificates'); // should name the folder certificate if not change the name

                $file->move($storagePath, $fileName);
                $path = '/storage/certificates/' . $fileName;
                $companyInfo = [
                    'userId' => $user->id,
                    'websiteLink' => $Request->input('website'),
                    'description' => $Request->input('description'),
                    'location' => $Request->input('location'),
                    'active' => 0,
                    'registrationNumber' => $Request->input('registrationNumber'),
                    "lebanonCreftificateOfIncorporation" => $path,
                    'logo' => '',

                ];

                $company = employer::create($companyInfo);
                $requestinfo =
                    [
                        'employerId' => $company->id,
                        'status' => '1'
                    ];

                EmployerRegistrationRequest::create($requestinfo );
                return redirect(route('login'));
            }
        } else {
            view('welcome');
        }
    }
}
