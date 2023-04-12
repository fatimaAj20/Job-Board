<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\employerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegesterController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SeekerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(["guest", "throttle:20,1"])->group(function () {
    Route::get('/', [loginController::class, 'index'])->name("login");
    Route::post('/', [loginController::class, 'authenticate'])->name("authentication");
    Route::get('/regester/seeker', [RegesterController::class, 'seeker'])->name("Sregester");
    Route::get('/regester/employer', [RegesterController::class, 'employer'])->name("Eregester");
    Route::post('/regester/seeker', [RegesterController::class, 'createSeeker'])->name("regesterSeeker");
    Route::post('/regester/employer', [RegesterController::class, 'createCompany'])->name("regesterCompany");  //use this in post action
});

Route::middleware(["auth"])->group(function () {
    Route::get('/admin', [adminController::class, "index"]);
    Route::get('/logout', [loginController::class, "logout"]);

    Route::post('/reject/{id}', [adminController::class, "rejectRequest"])->name('reject');
    Route::post('/approve/{id}', [adminController::class, "approveRequest"])->name('approve');
    Route::get('/admin/employers/{id}', [employerController::class, "index"]);

    //the following routes will be used to nevigate the pages of the seeker
    Route::get('/seeker.home', [SeekerController::class, 'home'])->name("seekerhome");
    Route::post('/seeker.search',[SeekerController::class, 'search'] )->name('searchJobs');
    Route::get('/seeker.profile/{id}', [SeekerController::class, 'profile'])->name("seekerprofile");
    Route::get('/seeker.edit',[SeekerController::class, 'editView'])->name("seekeredit");
    Route::post('/seeker.edit', [SeekerController::class, 'editSave'])->name("seekeredit");
    Route::get('/seeker.profile', [SeekerController::class, 'profile'])->name("seekerprofile");
    Route::get('/seeker.edit', [SeekerController::class, 'edit'])->name("profileEdit");




    Route::get('/employer', [employerController::class, "index2"]);
    Route::get('/jobPosts', [JobController::class, "index"]);
    Route::get('/jobRequests',[ApplicationController::class,"jobRequestView"]);

    Route::get('/addJob', [JobController::class, "index2"]);
    Route::post('/addJob', [JobController::class, 'create'])->name("createJob");
    Route::get('/jobPosts/details/{id}', [JobController::class, "show"]);
    Route::get('/addJob/edit/{id}', [JobController::class, "index3"]);
    Route::get('/delete/{id}', [JobController::class, "delete"]);
    Route::post('/addJob/edit/{id}', [JobController::class, 'save'])->name("save");


    Route::get('/job/seekers/{id}', [ApplicationController::class,"listSeekers" ]);
    Route::post('/job/seekers/{id}', [ApplicationController::class,"BestMatches" ]);


    Route::get('/employer/profile/{id}', [employerController::class, 'ViewProfile']);
    Route::post('/employer/profile/edit/{id}', [employerController::class, 'EditProfile']);
    Route::post('/employer/profile/{id}', [employerController::class, 'SaveProfile']);

    Route::post('/activity',[adminController::class,'showUserActivity']);
    Route::get("/activity",function(){
        return view("userActivity",["events"=>null]);
    });
    Route::get("/Employernotifications",[employerController::class,"EmployerNotifications"]);
    Route::get("/SeekerNotifications",[SeekerController::class,"SeekerNotifications"]);
});
