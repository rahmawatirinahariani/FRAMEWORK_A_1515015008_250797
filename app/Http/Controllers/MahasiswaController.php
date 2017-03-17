<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
      public function awal()
    {
    	return "Rahmawati";
    }
    public function tambah()
    { 
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Rina';
    	$mahasiswa->nim = '1515015008';
    	$mahasiswa->alamat = 'Jalan Ruhui Rahayu';
    	$mahasiswa->pengguna_id = '2';
    	$mahasiswa->save();
    	return "Data dengan nama {$mahasiswa->nama} telah disimpan";
    //
	}
    
}
