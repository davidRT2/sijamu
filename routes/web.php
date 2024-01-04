<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Dashboard.index');
});
Route::get('/index', function () {
    return view('Dashboard.index');
});
Route::get('/login', function () {
    return view('Login.index');
});

/////////////////////// Admin Route
Route::get('/admin/data-mahasiswa', function () {
    return view('Admin.DataMahasiswa.index');
})->name('admin/upsert-mahasiswa');
Route::get('/admin/upsert-mahasiswa', function () {
    return view('Admin.DataMahasiswa.upsert');
});
// Route::resource('/admin/mahasiswa', 'Admin.DataMahasiswa.index');


Route::get('/admin/data-dosen', function () {
    return view('Admin.DataDosen.index');
});
Route::get('/admin/upsert-dosen', function () {
    return view('Admin.DataDosen.upsert');
});
/////////////////////// End Admin Route

/////////////////////// Mahasiswa Route ////////////
Route::get('/mahasiswa/buatjanji', function () {
    return view('Mahasiswa.BuatJanji.index');
});
Route::get('/mahasiswa/janji-berhasil', function () {
    return view('Mahasiswa.BuatJanji.berhasil');
});
Route::get('/mahasiswa/riwayat', function () {
    return view('Mahasiswa.Riwayat.index');
});
Route::get('/mahasiswa/caridosen', function () {
    return view('Mahasiswa.CariDosen.index');
});
/////////////////////// End Mahasiswa Route ////////////

/////////////////////// Dosen Route ////////////
Route::get('/dosen/tanggapan', function () {
    return view('Dosen.index');
});
/////////////////////// Dosen Route ////////////