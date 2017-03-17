<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
    {
    	return "jadwal matakuliah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new Matakuliah();
    	$matakuliah->title = 'Struktur Data';
    	$matakuliah->keterangan = 'selamat kamu berhasil';
    	$matakuliah->save();
    	return "Data dengan matakuliah {$matakuliah->title} dengan keterangan ($matakuliah->keterangan) telah disimpan";
    //
	}

}