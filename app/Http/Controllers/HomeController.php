<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        if(Auth::user()->usertype == 'user')
        {
            return view('mainpage');
        }

        else
        {
            return view('adminpage');
        }

    }

    public function page()
    {
        return view('adminpage');
    }
}
