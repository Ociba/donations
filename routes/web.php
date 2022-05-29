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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/about', function () { return view('front.about');});
Route::get('/activities', function () { return view('front.activities');});
Route::get('/target-group', function () { return view('front.target_group');});
Route::get('/projects', function () { return view('front.projects');});
Route::get('/blog', function () { return view('front.blog');});
Route::get('/contact', function () { return view('front.contact');});
Route::get('/resources', function () { return view('front.resources');});
Route::get('/donate', function () { return view('front.donate');});
Route::get('/computer', function () { return view('front.computer');});
Route::get('/music', function () { return view('front.music');});
Route::get('/pe', function () { return view('front.pe');});
Route::get('/sponsors', function () { return view('front.sponsors');});
Route::get('/team', function () { return view('front.team');});
Route::get('/payment-details',function(){ return view('front.payments-info');});
