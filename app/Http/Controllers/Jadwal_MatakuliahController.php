<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;
use App\Dosen_Matakuliah;
use App\Mahasiswa;
use App\Ruangan;

class Jadwal_MatakuliahController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal()
    {
        $semuaJadwalMatakuliah = Jadwal_Matakuliah::all();
        return view('jadwal_matakuliah.awal',compact('semuaJadwalMatakuliah'));
    }

    public function tambah()
    {
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosenMatakuliah = new Dosen_Matakuliah; 
        return view('jadwal_matakuliah.tambah', compact('mahasiswa','ruangan','dosenMatakuliah'));
    }

    public function simpan(Request $input)
    {
        $jadwal_matakuliah = new Jadwal_Matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id')); 
        if($jadwal_matakuliah->save()) $this->informasi= 'Jadwal Mahasiswa Berhasil Di Simpan';
        return redirect('jadwal_matakuliah')->with(['informasi' =>$this->informasi]);
    }

    public function edit ($id)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosenMatakuliah = new Dosen_Matakuliah;
        return view('jadwal_matakuliah.edit', compact('mahasiswa','ruangan','dosenMatakuliah','jadwal_matakuliah'));
    }

    public function lihat ($id)
    {
    $jadwal_matakuliah=Jadwal_Matakuliah::find($id);
    return view ('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
    }

    public function update ($id,request $input)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        $informasi = $jadwal_matakuliah->save()? 'Berhasil Update Data' : 'Gagal Update Data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
    
    public function hapus ($id)
    {
    $jadwal_matakuliah=Jadwal_Matakuliah::find($id);
    $informasi = $jadwal_matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
    return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
        
}