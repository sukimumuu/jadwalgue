<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function store_user(Request $user_req){
        $uname_gnerator = new TanggalIndo();
        $uname = "AccountJG".$uname_gnerator->randomStringWithNumbers(12);
        $users = User::create([
            'name' => $uname,
            'email' => $user_req->email,
            'password' => Hash::make($user_req->password),
        ]);
        Auth::login($users);
        return redirect()->route('complete-profil');
    }
    
    public function complete_profil(){
        $dateController = new TanggalIndo();
        $date = date('Y-m-d');
        $tanggal = $dateController->tanggalIndo($date);
        return view('jadwalgue.complete-profil',compact('tanggal'), [
            'title' => 'Lengkapi Profil - Jadwal Gue'
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('main');
    }

    public function store_complete_profil(Request $request,$id){
        $nameAvataarTmp = Str::random(9).'.'.$request->file('avatar')->getClientOriginalExtension();
        $request->file('avatar')->move('avatar-user/', $nameAvataarTmp);
        $users = User::find($id)->update([
            'name' => $request->name,
            'avatar' => $nameAvataarTmp,
        ]);
        return redirect()->route('index');
    }
}
