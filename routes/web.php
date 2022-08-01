<?php

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
////homepage
Route::get('/', function () {
    return view('Base.home');
});


Route::get('/series', function(){
return view('Base.series');
});


Route::get('/movies', function(){
return view('Base.movies');
});


Route::get('/info', function(){
return view('Auth.info');
})->name('info');


Route::get('/packages', function(){
return view('Auth.chooseplan');
});

Route::get('/login', function(){
return view('Auth.login');
})->name('login');


Route::get('/registration', function(){
    return view('Auth.registration');
})->name('registration');


Route::get('/forgotpassword', function(){
    return view('Auth.forgotpassword');
});