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
