<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PageController@home');



Route::get('/daftar-siswa', 'PageController@daftarsiswa');

Route::get('/daftar-siswa/6A', 'PageController@daftarsiswa6a');

Route::get('/mahasiswa', 'MahasiswaController@index');

// per Kelas
Route::get('/mahasiswa/6A', 'MahasiswaController@kelasA');
Route::get('/mahasiswa/6B', 'MahasiswaController@kelasB');
Route::get('/mahasiswa/6C', 'MahasiswaController@kelasC');
Route::get('/mahasiswa/6D', 'MahasiswaController@kelasD');
