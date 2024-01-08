@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
            {{-- /////////// Header ////////// --}}
            <div class="row">
                <div class="col-sm-9">
                    <h3>Edit Data Dosen</h3>
                </div>
            </div>
            <hr>
            {{-- /////////// End Header ////////// --}}

            {{-- /////////// Form ////////// --}}

            <form class="forms-sample" method="post" action="{{ route('update.dosen', ['id' => $dataDosen->nomor_registrasi]) }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">NIP</label>
                    <input name="no-reg" type="text" class="form-control" id="exampleInputNIP1" placeholder="NIP" value="{{ $dataDosen->nomor_registrasi }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Nama" value="{{ $dataDosen->nama }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputStatus1">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="#" disabled selected>-- Pilih --</option>
                        <option value="admin">Admin</option>
                        <option value="dosen">Dosen</option>
                        <option value="mahasiswa">Mahasiswa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        @foreach($daftarJurusan as $jurusan)
                        <option value="{{ $jurusan->kode_jurusan }}" @if($jurusan->kode_jurusan == $dataDosen->kode_jurusan) selected @endif>
                            {{ $jurusan->nama_jurusan }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ $dataDosen->email }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">No Telp</label>
                    <input name="no_telp" type="text" class="form-control" id="exampleInputNo Telp1" placeholder="No Telp" value="{{ $dataDosen->nomor_telepon }}">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a class="btn btn-light" href="/admin/data-dosen">Cancel</a>
            </form>
            {{-- /////////////////////// End Form ///////////////////// --}}
        </div>
    </div>
</div>

@stop