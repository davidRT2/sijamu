<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\JanjiTemu;
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
            ->where('history.status', '=', 'diajukan')
            ->get();
        // Mengirim data ke view
        return view('Dosen.index', compact('dataJanji'));
    }

    public function tolak(Request $request)
    {
        $kodeJanji = $request->kode_janji;
        $status = $request->status;

        // Misalnya, menggunakan model History dan Eloquent
        History::where('kode_janji', $kodeJanji)->update(['status' => $status]);

        return response()->json(['message' => 'Janji berhasil ditolak']);
    }
    public function terima(Request $request)
    {
        $kodeJanji = $request->kode_janji;
        $status = $request->status;

        // Misalnya, menggunakan model History dan Eloquent
        History::where('kode_janji', $kodeJanji)->update(['status' => $status]);

        return response()->json(['message' => 'Janji berhasil diterima']);
    }

    public function reschedule(Request $request)
    {
        $kodeJanji = $request->kode_janji;
        $tanggal = $request->tanggal;
        $tempat = $request->tempat;

        // Misalnya, menggunakan model JanjiTemu dan Eloquent
        $result = JanjiTemu::where('kode_janji', $kodeJanji)
            ->update(['tanggal' => $tanggal, 'tempat' => $tempat]);

        // Misalnya, menggunakan model History dan Eloquent
        History::where('kode_janji', $kodeJanji)
            ->update(['status' => 'rescheduled']);

        // Periksa hasil update dan kirim respons sesuai
        if ($result) {
            return response()->json(['message' => 'Janji berhasil direschedule']);
        } else {
            return response()->json(['message' => 'Gagal melakukan reschedule. Janji tidak ditemukan atau status tidak valid.']);
        }
    }
}
