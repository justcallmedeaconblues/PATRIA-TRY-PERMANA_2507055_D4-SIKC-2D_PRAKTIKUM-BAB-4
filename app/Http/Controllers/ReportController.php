<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $judul = 'Data laporan fasilitas kota';
        $laporan =[ 
            ['id' => '1', 'fasilitas' => 'Lampu A', 'Status' => 'Aktif'],
            ['id' => '2', 'fasilitas' => 'Lampu B', 'Status' => 'Non-Aktif'],
            ['id' => '3', 'fasilitas' => 'Lampu C', 'Status' => 'Aktif']
    
    ];  
        return view('reports.index', [
            'judul' => $judul,
            'laporan' => $laporan,
        ]);
    
    }

    public function show($id){
        return view('reports.show', ['id'=>$id]);
    }
}
