<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{

	public function ruangan()
	{
		return $this->belongsTo(Ruangan::class);
	}

	public function mahasiswa()
	{
		return $this->belongsTo(Mahasiswa::class);
	}

	public function dosen_matakuliah()
	{
		return $this->belongsTo(Dosen_Matakuliah::class);
	}
   protected $table = 'jadwal_matakuliah';
   protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    //
}
