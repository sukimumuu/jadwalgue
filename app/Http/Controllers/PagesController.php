<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   
    public function index(){
        $dateController = new TanggalIndo();
        $date = date('Y-m-d');
        $tanggal = $dateController->tanggalIndo($date);
        return view('jadwalgue.index', compact('tanggal'), [
            'title' => 'Beranda - JadwalGue'
        ]);
    }
}
