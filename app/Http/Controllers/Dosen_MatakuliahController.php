<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;
class Dosen_MatakuliahController extends Controller
{
      public function awal()
    {
    	return "Pilih Jadwal";
    }
    public function tambah()
    { 
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen_matakuliah = new Dosen_Matakuliah();
    	$dosen_matakuliah->dosen_id = '1';
    	$dosen_matakuliah->matakuliah_id = '1';
    	$dosen_matakuliah->save();
    	return "Data dengan dosen_matakuliah {$dosen_matakuliah->dosen_id} telah disimpan";
    //
	}
    //
}
