<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployerRegistrationRequest;
use DB;

class adminController extends Controller
{
    function index(Request $request){
        $filter=$request->get("filter",1);
        $requests=EmployerRegistrationRequest::where("status",$filter)->get();
        $names=array();
        foreach($requests as $req){
           $result= DB::select("select getEmployerName(".$req->employerId.") as name");
           \Log::info($result);
           $names[$req->id]=$result[0]->name;

        }
        \Log:: info($requests);
        \Log:: info($filter);
        \Log::info($names);
        return view("admin",["requests"=>$requests,"names"=>$names]);
    }
    function rejectRequest($id){
       $request= EmployerRegistrationRequest::find($id);
       $request->status=0;
       $request->save();
       return redirect("/admin");
    }
    function approveRequest($id){
        $request= EmployerRegistrationRequest::find($id);
        \Log:: info($request);
        $request->status=2;
        $request->save(); 
        return redirect("/admin");
    }
}
