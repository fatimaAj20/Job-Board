<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddItem;
use App\Http\Controllers\adminController;
use App\Models\test2;
use App\Http\Controllers\employerController;

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

Route::middleware(["guest", "throttle:20,1"])-> group(function(){
    Route::get('/', [loginController::class, 'index'])->name("login") ;
    Route::post('/', [loginController::class, 'authenticate'])->name("authentication") ;
    Route::get('/regester/seeker', [RegesterController::class, 'seeker'])->name("Sregester") ;
    Route::get('/regester/employer', [RegesterController::class, 'employer'])->name("Eregester") ;
    Route:: post('/regester/seeker', [RegesterController::class, 'createSeeker'])->name("regesterSeeker");
    Route:: post('/regester/employer', [RegesterController::class, 'createCompany'])->name("regesterCompany");  //use this in post action


    });


    Route::get('/admin', [adminController::class, "index" ]);
    Route::post('/reject/{id}', [adminController::class, "rejectRequest" ])->name('reject');
    Route::post('/approve/{id}', [adminController::class, "approveRequest" ])->name('approve');
    Route::get('/admin/employers/{id}', [employerController::class, "index" ]);



Route:: get('/seeker.index', [SeekerController::class, 'index'])->name("seekerhome");

