<?php

namespace App\Models;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaController extends Model
{
    use HasFactory;

    public function index()
    {
        $dataMahasiswa = DataUser::join('data_jurusan', 'data_user.kode_jurusan', '=', 'data_jurusan.kode_jurusan')
            ->select('data_user.*', 'data_jurusan.nama_jurusan')
            ->where('data_user.role', '=', 'mahasiswa')
            ->get();

        // Mengirim data ke view
        return view('Admin.DataMahasiswa.index', compact('dataMahasiswa'));
    }

    public function listJurusan()
    {
        $dataJurusan = DataJurusan::all();

        return view('Admin.DataMahasiswa.upsert', compact('dataJurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no-reg' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
        ]);

        $dataUser = new DataUser();
        $dataUser->nomor_registrasi = $request->input('no-reg');
        $dataUser->nama = $request->input('nama');
        $dataUser->role = $request->input('status');
        $dataUser->kode_jurusan = $request->input('jurusan');
        $dataUser->email = $request->input('email');
        $dataUser->jabatan = "mahasiswa";
        $dataUser->nomor_telepon = $request->input('no_telp');
        $dataUser->save();

        return redirect('/admin/data-mahasiswa')->with('success', 'Data Mahasiswa berhasil disimpan.');
    }

    public function editMahasiswa($id)
    {
        $dataMahasiswa = DataUser::where('nomor_registrasi', $id)->first();
        $daftarJurusan = DataJurusan::all();

        return view('Admin.DataMahasiswa.update', compact('dataMahasiswa', 'daftarJurusan'));
        // return view('Admin.DataDosen.update');
    }

    public function promiseIndex()
    {
        $data = DataUser::join('data_jurusan', 'data_user.kode_jurusan', '=', 'data_jurusan.kode_jurusan')
            ->select('data_user.*', 'data_jurusan.nama_jurusan')
            ->where('data_user.role', '=', 'dosen')
            ->get();
        return view('Mahasiswa.BuatJanji.index', compact('data'));
    }

    public function cariDosen(Request $request)
    {
        $query = $request->input('query');
    
        // Lakukan pencarian dosen berdasarkan nama dengan inner join ke DataJurusan
        $results = DataUser::join('data_jurusan', 'data_user.kode_jurusan', '=', 'data_jurusan.kode_jurusan')
            ->select('data_user.*', 'data_jurusan.nama_jurusan')
            ->where('data_user.nama', 'like', '%' . $query . '%')
            ->where('data_user.role', 'dosen')
            ->get();
    
        return response()->json($results);
    }
    
}
