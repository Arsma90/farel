<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;
use App\Models\Pengaduan;


class PengaduanController extends Controller
{
    function index(){

    $data = Pengaduan::all();
 

    return view('dashboard', ['data' => $data]);
   }

  function tampil_isi_pengaduan(){

    return view('isi-pengaduan');
  }

  function proses_tambah_pengaduan(Request $request){

    $validated = $request->validate([
      'isi_laporan' => 'required|string',
      'foto' => 'required',
    ]);

    $nama = "";

    if ($request->hasFile('foto')) {
        $nama = time() . $request->foto->getClientOriginalName();
        $request->foto->move('img', $nama);
    }

    DB::table('pengaduan')->insert([
      'tgl_pengaduan' => date('y-m-d'),
      'nik' => '18236',
      'isi_laporan' => $request->isi_laporan,
      'foto' => $nama,
      'status' => 'proses'
    ]);

    return redirect('/dashboard');
  }
}