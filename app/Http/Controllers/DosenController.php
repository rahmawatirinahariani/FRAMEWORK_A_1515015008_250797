<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen; 

class DosenController extends Controller
{
    public function awal()
    {
    	return "Nama Dosen";
    }
    public function tambah()
    { 
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama = 'Novianti';
    	$dosen->nip = '2512141897';
    	$dosen->alamat = 'Jalan Pramuka 5';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data dengan dosen {$dosen->nama} telah disimpan";
    //
	}
   
}
