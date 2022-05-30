<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\AuthenticationController;

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
})->name('Home');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard')->middleware(middleware:'signed');
// });
Route::get('/dashboard', [DasboardController::class, 'getDashboard'])->name('dashboard');

Route::get('logout',[AuthenticationController::Class,'logoutUser'])->middleware('auth');
Route::get('/about', function () { return view('front.about');})->name('About')->middleware('signed');
Route::get('/activities', function () { return view('front.activities');})->name('Activities')->middleware('signed');
Route::get('/target-group', function () { return view('front.target_group');})->name('Target Groups')->middleware('signed');
Route::get('/projects', function () { return view('front.projects');})->name('Projects')->middleware('signed');
Route::get('/blog', function () { return view('front.blog');})->name('Blog')->middleware('signed');
Route::get('/contact', function () { return view('front.contact');})->name('Contact')->middleware('signed');
Route::get('/resources', function () { return view('front.resources');})->name('Resources')->middleware('signed');
Route::get('/donate', function () { return view('front.donate');})->name('Donate')->middleware('signed');
Route::get('/computer', function () { return view('front.computer');})->name('Computer')->middleware('signed');
Route::get('/music', function () { return view('front.music');})->name('Music')->middleware('signed');
Route::get('/pe', function () { return view('front.pe');})->name('Physical Education')->middleware('signed');
Route::get('/sponsors', function () { return view('front.sponsors');})->name('Sponsorships')->middleware('signed');
Route::get('/team', function () { return view('front.team');})->name('Team')->middleware('signed');
Route::get('/payment-details',function(){ return view('front.payments-info');});
