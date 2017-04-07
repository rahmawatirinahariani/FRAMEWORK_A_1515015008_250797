<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{

	public function dosen()
	{
		return $this->belongsTo(Dosen::class);
	}

	public function jadwal_matakuliah()
	{
		return $this->hasMany(Jadwal_Matakuliah::class);
	}

	public function matakuliah()
	{
		return $this->belongsTo(Matakuliah::class);
	}

	public function listDosenDanMatakuliah()
    {
    	$out = [];
    	foreach ($this ->all() as $dsnMtk) {
    		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (Matakuliah {$dsnMtk->matakuliah->title})";
    	}
    	return $out;
    }

    public function getNamadosenAttribute(){
        return $this->dosen->nama;
    }

    public function getNipdosenAttribute(){
        return $this->dosen->nim();
    }

    public function getTitleMatakuliahAtribute(){
        return $this->matakuliah->title;
    }

   protected $table = 'dosen_matakuliah';
   protected $fillable = ['dosen_id','matakuliah_id'];
    //
}
