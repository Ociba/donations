<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function getDashboard(){
        // return URL::temporarySignedRoute(
        //     'dashboard', now()->addMinutes(30)
        // );
        return view('dashboard');
    }
}
