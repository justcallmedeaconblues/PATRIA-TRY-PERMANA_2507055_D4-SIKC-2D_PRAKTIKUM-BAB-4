<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){
        $ringkasan = [
    'total'    => 3,
    'diproses' => 1,
    'selesai'  => 1,
];
        return view('home', compact('ringkasan'));
    }

    public function profil(){
        return view('profil');
    }
    public function laporan(){
        return view('laporan');
    }
}
