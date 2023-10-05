<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
    
class MasyarakatController extends Controller
{
    function proses_tambah_masyarakat(Request $request){

        $isi_nama = $request->nama;
    
        DB::table('masyarakat')->insert([
          'nik' => '18236',
          'nama' => $isi_nama,
          'username' => 'riri2983',
          'passwordd' => '2933'
        ]);
    
        return redirect('/dashboard');
      }
}
