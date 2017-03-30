<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{

	public function pengguna()
	{
		return this->belongsTo(Pengguna::class);
	}

	public function dosen_matakuliah()
	{
		return this->hasMany(Dosen_Matakuliah::class);
	} 
	
   protected $table = 'dosen';
   protected $fillable = ['nama','nip','alamat','pengguna_id'];
    //
}
