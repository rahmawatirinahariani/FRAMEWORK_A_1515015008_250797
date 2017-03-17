]<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');



use App\Pengguna;
Route::get('pengguna/simpan',function()
    {
    	$pengguna = new Pengguna();
    	$pengguna->username = 'rahmawati';
    	$pengguna->password = 'doe_jon';
    	$pengguna->save();
    	return "Data dengan username {$pengguna->username} telah disimpan";});

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('pengguna','PenggunaController@awal');

 Route::get('/halamanku', function () {
     return view ('halamanku');
});

Route::get('public', function () {
     return view('Biodata');
});

Route::auth();

Route::get('pengguna/{Rahmawati}',function ($pengguna)
 {
 	return "Hallo word dari pengguna $pengguna";
 });
