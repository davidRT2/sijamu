<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;
use App\Models\DataJurusan;

class DosenController extends Controller
{
    //
    public function index(){
        $dataDosen = DataUser::join('data_jurusan', 'data_user.kode_jurusan', '=', 'data_jurusan.kode_jurusan')
            ->select('data_user.*', 'data_jurusan.nama_jurusan')
            ->where('data_user.role', '=', 'dosen')
            ->get();

        // Mengirim data ke view
        return view('Admin.DataDosen.index', compact('dataDosen'));
    }

    public function editDosen($id){
        $dataDosen = DataUser::where('nomor_registrasi', $id)->first();
        $daftarJurusan = DataJurusan::all();

        return view('Admin.DataDosen.update', compact('dataDosen', 'daftarJurusan'));
        // return view('Admin.DataDosen.update');
    }

    public function listJurusan(){
        $dataJurusan = DataJurusan::all();

        return view('Admin.DataDosen.upsert', compact('dataJurusan'));
    }

    public function store(Request $request){
        $request->validate([
            'no-reg' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
        ]);

        $dataUser = new DataUser();
        $dataUser->nomor_registrasi = $request->input('no-reg');
        $dataUser->nama = $request->input('nama');
        $dataUser->role = "Dosen";
        $dataUser->kode_jurusan = $request->input('jurusan');
        $dataUser->email = $request->input('email');
        $dataUser->jabatan = "Dosen";
        $dataUser->nomor_telepon = $request->input('no_telp');
        $dataUser->save();

        return redirect('/admin/data-dosen')->with('success', 'Data Dosen berhasil disimpan.');
    }

    public function update(Request $request, $id){
        $request->validate([
            'no-reg' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
        ]);
        $dataUser = new DataUser();
        $dataUser = DataUser::where('nomor_registrasi', $id)->first();
        $dataUser->nama = $request->input('nama');
        $dataUser->role = $request->input('status');
        $dataUser->kode_jurusan = $request->input('jurusan');
        $dataUser->email = $request->input('email');
        $dataUser->jabatan = "Dosen";
        $dataUser->nomor_telepon = $request->input('no_telp');
        $dataUser->save();

        // return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil diperbarui.');
        return redirect('/admin/data-dosen')->with('success', 'Data Dosen berhasil disimpan.');
    }
}