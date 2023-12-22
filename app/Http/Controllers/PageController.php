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

    public function login($id){
        $data = User::find($id);
        return view('Auth.login', compact('data'));
    }
}
