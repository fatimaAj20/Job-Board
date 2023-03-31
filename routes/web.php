<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/regester', [RegesterController::class, 'index'])->name("regester") ;
    Route::get('/password.forgot', [RegesterController::class, 'forgot'])->name("forgot") ;
    Route:: post('/regester', [RegesterController::class, 'create'])->name("regesterUser"); //use this in post action

}
);
