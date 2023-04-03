<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{

    public function perform()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
    public function webLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('front');
    }

}
