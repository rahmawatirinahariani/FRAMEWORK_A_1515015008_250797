<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;
class Dosen_MatakuliahController extends Controller
{
    public function awal(){
       $semuadosenMatakuliah = Dosen_Matakuliah::all();
       return view('dosenMatakuliah.awal', compact('semuadosenMatakuliah'));

    //return "Hello dari dosen_matakuliahcontroller";
    }
    public function tambah()
    {      
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosenMatakuliah.tambah',compact('dosen','matakuliah'));
       
    }


    public function simpan(Request $input){
        $dosenMatakuliah = new Dosen_Matakuliah($input->only('dosen_id','matakuliah_id'));
        if($dosenMatakuliah->save()) $this->informasi = "Matakuliah dan Dosen Mengajar berhasil disimpan";
        return redirect('dosenMatakuliah')->with(['informasi'=>$this->informasi]);
        //$dosen_matakuliah= new dosen_matakuliah();
        //$dosen_matakuliah->dossen_id  = '1';
        //$dosen_matakuliah->matakuliah_id  = '1';
        //$dosen_matakuliah->save();
    //return "data dengan id dosen {$dosen_matakuliah->dossen_id} yang mengajar matakuliah dengan id {$dosen_matakuliah->id} telah disimpan";
    }

    public function lihat($id){
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        return view('dosenMatakuliah.lihat', compact('dosenMatakuliah'));
    }

    public function edit($id){
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenMatakuliah.edit',compact('dosen','matakuliah','dosenMatakuliah'));
    }

    public function update($id,Request $input)
    {
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        $dosenMatakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosenMatakuliah->save()) $this->informasi = "Matakuliah dan Dosen Mengajar berhasil diperbarui";
        return redirect('dosenMatakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id,Request $input)
    {
        $dosenMatakuliah = Dosen_Matakuliah::find($id);
        if($dosenMatakuliah->delete()) $this->informasi = "Matakuliah dan Mahasiswa berhasil dihapus";
        return redirect('dosenMatakuliah')-> with(['informasi'=>$this->informasi]);
    }
}
