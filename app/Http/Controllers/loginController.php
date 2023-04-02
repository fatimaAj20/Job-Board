<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view("login/index");
    }

    public function logout(){
        Auth::logout();
        return redirect("/");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role == User::ADMIN_ROLE){
                return redirect ("/admin");
            }
            elseif(Auth::user()->role == User::SEEKER_ROLE){
                return redirect("/seeker.index");
            }
            else{
                return redirect("/employer");
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
