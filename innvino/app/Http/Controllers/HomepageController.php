<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('mainpage');
    }

    public function menu(){
        return view('menu');
    }
}
