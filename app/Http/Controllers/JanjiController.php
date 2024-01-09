<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\JanjiTemu;
use Illuminate\Http\Request;

class JanjiController extends Controller
{
    public function index()
    {
        $dataJanji = History::join('janji_temu', 'history.kode_janji', '=', 'janji_temu.kode_janji')
            ->join('data_user as dosen', 'history.nip_dosen', '=', 'dosen.nomor_registrasi')
            ->join('data_user as mahasiswa', 'history.nim_mahasiswa', '=', 'mahasiswa.nomor_registrasi')
            ->select('history.*', 'janji_temu.*', 'dosen.nama as nama_dosen', 'mahasiswa.nama as nama_mahasiswa')
            ->where('history.nim_mahasiswa', '=', '4338372432840')
            ->get();
        // Mengirim data ke view
        return view('Mahasiswa.Riwayat.index', compact('dataJanji'));
    }

    public function store(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'nim' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'perlu' => 'required',
        ]);

        // Memformat tanggal dan waktu
        $formattedDatetime = date('Y-m-d H:i:s', strtotime($request->tanggal));

        // Simpan data ke database
        $kodeJanji = $this->generateKodeJanji();
        JanjiTemu::create([
            'kode_janji' => $kodeJanji,
            'tanggal' => $formattedDatetime,
            'tempat' => $request->tempat,
            'keperluan' => $request->perlu,
        ]);
        History::create([
            'kode_janji' => $kodeJanji,
            'nip_dosen' => $request->nip,
            'nim_mahasiswa' => $request->nim,
            'status' => 'diajukan',
        ]);


        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('/mahasiswa/janji-berhasil')->with('success', 'Janji berhasil dibuat!');
    }
    /* 
    Fungsi umum
    */
    public function generateKodeJanji()
    {
        // Mendapatkan timestamp saat ini
        $timestamp = now()->timestamp;

        // Menghasilkan kode unik menggunakan beberapa karakter acak
        $randomChars = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, 5);

        // Menggabungkan timestamp dan karakter acak
        $kodeJanji = 'Jj/' . $timestamp . $randomChars;

        return $kodeJanji;
    }
}
