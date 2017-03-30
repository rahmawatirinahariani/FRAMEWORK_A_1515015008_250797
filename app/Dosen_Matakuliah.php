<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{

	public function dosen()
	{
		return this->belongsTo(Dosen::class);
	}

	public function jadwal_matakuliah()
	{
		return this->hasMany(Jadwal_Matakuliah::class);
	}

	public function matakuliah()
	{
		return this->belongsTo(Matakuliah::class);
	}
   protected $table = 'dosen_matakuliah';
   protected $fillable = ['dosen_id','matakuliah_id'];
    //
}
