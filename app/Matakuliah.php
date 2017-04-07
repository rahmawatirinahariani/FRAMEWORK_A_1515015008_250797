<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
	public function dosen_matakuliah()
	{
		return $this->hasMany(Dosen_Matakuliah::class);
	}
    protected $table = 'matakuliah';
    protected $fillable = ['title','keterangan'];
}
