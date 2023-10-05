<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    function index(){

        $judul = "Selamat Datang";
        $pengaduan = DB::table('pengaduan')->get();
    
        return view('dashboard', ['judul' => $judul, 'pengaduan' => $pengaduan]);
       }
}
