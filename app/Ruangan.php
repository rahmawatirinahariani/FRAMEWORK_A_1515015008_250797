<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public function jadwal_matakuliah()
    {
    	return this->hasMany(Jadwal_Matakuliah::class);
    }
    protected $table = 'ruangan';
    protected $fillable = ['title'];
}
