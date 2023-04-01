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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [adminController::class, "index" ]);
Route::post('/reject/{id}', [adminController::class, "rejectRequest" ])->name('reject');
Route::post('/approve/{id}', [adminController::class, "approveRequest" ])->name('approve');
Route::get('/admin/employers/{id}', [employerController::class, "index" ]);


