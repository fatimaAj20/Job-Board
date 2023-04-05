<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeekerController extends Controller
{
    public function index()
{
    return view('seeker.home');
}
public function profile()
{
    return view('seeker.profile');
}
}
