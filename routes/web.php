<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');


Route::get('/tableuser',[HomeController::class,'tableuser'])->name('index');

Route::get('/create',[HomeController::class,'create'])->name('user.create');

Route::post('/store',[HomeController::class,'store'])->name('user.store');

Route::get('/edit/{id}',[HomeController::class,'edit'])->name('user.edit');
Route::put('/update/{id}',[HomeController::class,'update'])->name('user.update');
Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('user.delete');

Route::get('/rkap',[HomeController::class,'table'])->name('rkap');
