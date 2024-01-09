<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\JanjiController;
use App\Http\Controllers\ResponJanjiController;
use App\Models\MahasiswaController;
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
Route::get('/admin/data-mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/admin/upsert-mahasiswa', [MahasiswaController::class, 'listJurusan']);
Route::post('/admin/insert-mahasiswa', [MahasiswaController::class, 'store'])->name('mhs.submit');
Route::get('/admin/edit-mahasiswa/{id}', [MahasiswaController::class, 'editMahasiswa'])->name('edit.mahasiswa');

/* 
Batas Controller Mahasiswa
*/
Route::post('/form-submit', [DosenController::class, 'store'])->name('form.submit');
Route::get('/admin/data-dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/admin/upsert-dosen', [DosenController::class, 'listJurusan'])->name('upsert-dosen');
Route::get('/admin/edit-dosen/{id}', [DosenController::class, 'editDosen'])->name('edit.dosen');
Route::post('/admin/update-dosen/{id}', [DosenController::class, 'update'])->name('update.dosen');
/////////////////////// End Admin Route

/////////////////////// Mahasiswa Route ////////////

Route::get('/mahasiswa/buatjanji', [MahasiswaController::class, 'promiseIndex'])->name('createJanji.promis');
Route::get('/mahasiswa/cari-dosen', [MahasiswaController::class, 'cariDosen']);
Route::get('/mahasiswa/janji-berhasil', function () {
    return view('Mahasiswa.BuatJanji.berhasil');
});
Route::post('/mahasiswa/create-janji', [JanjiController::class, 'store'])->name('store.janji');
Route::get('/mahasiswa/riwayat', [JanjiController::class, 'index'])->name('index.janji');
Route::get('/mahasiswa/caridosen', function () {
    return view('Mahasiswa.CariDosen.index');
});

/////////////////////// End Mahasiswa Route ////////////

/////////////////////// Dosen Route ////////////
Route::get('/dosen/tanggapan', [ResponJanjiController::class, 'index'])->name('dosen.index');
/////////////////////// Dosen Route ////////////