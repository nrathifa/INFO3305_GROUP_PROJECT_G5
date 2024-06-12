<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadersController extends Controller
{
    public function index()
    {
        return view('readerprofile');
    }
}
