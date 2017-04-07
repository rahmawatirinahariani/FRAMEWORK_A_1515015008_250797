<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{

	public function pengguna()
	{
		return $this->belongsTo(Pengguna::class);
	}

	public function dosen_matakuliah()
	{
		return $this->hasMany(Dosen_Matakuliah::class);
	} 
	public function getUsernameAttribute(){
    return $this->pengguna->username;
    }

    public function listDosenDanNip()
    {
    	$out = [];
    	foreach ($this ->all() as $dsn) {
    		$out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
    	}
    	return $out;
    }
    //public function getUsernameAttribute(){
    //	return $this->pengguna->username;
    //}

	
   protected $table = 'dosen';

   //protected $fillable = ['nama','nip','alamat','pengguna_id'];
    //
}
