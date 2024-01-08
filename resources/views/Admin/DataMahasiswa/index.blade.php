@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
            {{-- /////////// Header ////////// --}}
            <div class="row">
                <div class="col-sm-9">
                    <h3>Data Mahasiswa</h3>
                </div>
                <div class="col-sm-3">
                    <div class="row g-3">
                        <div class="col-auto">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Nama Dosen">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3 btn-sm">Cari</button>
                          </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- /////////// End Header ////////// --}}
            {{-- /////////// Table ////////// --}}
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dataMahasiswa as $index => $mhs)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $mhs->nama }}</td>
                      <td>{{ $mhs->nomor_registrasi }}</td>
                      <td>{{ $mhs->email }}</td>
                      <td>{{ $mhs->nomor_telepon }}</td>
                      <td>{{ $mhs->nama_jurusan }}</td>
                      <td>
                        <a href="{{ route('edit.mahasiswa', ['id' => $mhs->nomor_registrasi]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/admin/upsert-dosen" class="btn btn-danger btn-sm" >Delete</a>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            {{-- /////////// End Table ////////// --}}

            {{-- /////////////////////// End Content ///////////////////// --}}
        </div>
        
    </div>
</div>

@stop
