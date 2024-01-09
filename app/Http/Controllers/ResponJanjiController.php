<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class ResponJanjiController extends Controller
{
    //
    public function index()
    {
        $dataJanji = History::join('janji_temu', 'history.kode_janji', '=', 'janji_temu.kode_janji')
            ->join('data_user as dosen', 'history.nip_dosen', '=', 'dosen.nomor_registrasi')
            ->join('data_user as mahasiswa', 'history.nim_mahasiswa', '=', 'mahasiswa.nomor_registrasi')
            ->join('data_jurusan as jurusan', 'mahasiswa.kode_jurusan', '=', 'jurusan.kode_jurusan')
            ->select('history.*', 'janji_temu.*', 'dosen.nama as nama_dosen', 'mahasiswa.nama as nama_mahasiswa', 'jurusan.nama_jurusan')
            ->where('history.nip_dosen', '=', '43232323')
            ->get();
        // Mengirim data ke view
        return view('Dosen.index', compact('dataJanji'));
    }
}
