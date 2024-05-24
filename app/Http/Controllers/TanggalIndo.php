<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanggalIndo extends Controller
{
    function tanggalIndo($tanggal) {
        $hari = array(
            1 => 'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );

        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $tanggalSplit = explode('-', $tanggal);
        $hariIni = $hari[date('N', strtotime($tanggal))];
        $tanggalIndo = $tanggalSplit[2] . ' ' . $bulan[(int)$tanggalSplit[1]] . ' ' . $tanggalSplit[0];

        return $hariIni . ', ' . $tanggalIndo;
    }

    function randomStringWithNumbers($length) {
        return substr(bin2hex(random_bytes($length / 2)), 0, $length);
    }
}
