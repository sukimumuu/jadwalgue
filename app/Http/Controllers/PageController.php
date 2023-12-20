<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = User::all();
        return view('Auth.index', compact('data'));
    }

    public function home(){
        return view('home.index');
    }
}
