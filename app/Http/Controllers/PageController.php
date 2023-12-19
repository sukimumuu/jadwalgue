<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('Auth.index');
    }

    public function home(){
        return view('home.index');
    }
}
