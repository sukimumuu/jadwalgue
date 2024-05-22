<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('Auth.create-profil');
    }

    public function store(Request $req){
         $validated = $req->validate([
            'name' => 'required|unique:users,name|max:255',
            'password' => 'required|min:8',
            'avatar' => 'dimensions:min_width=100,min_height=100',
        ]);
        $data = User::create([
           'name' => $req->name,
           'password' => Hash::make($req['password']),
        ]);
        if($req->hasFile('avatar')){
         $req->file('avatar')->move('avatar/', $req->file('avatar')->getClientOriginalName());
         $data->avatar = $req->file('avatar')->getClientOriginalName();
         $data->save();
        }

        Auth::login($data);
        return redirect()->route('home')->with('success', 'Membuat profil berhasil');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        // Mencocokan data pengguna berdasarkan 'username'
        if (Auth::attempt($credentials)) {
            // Berhasil login
            return redirect()->route('home');
        }
        // Gagal login
        return redirect()->back();
    }
}
