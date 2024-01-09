@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
            {{-- /////////// Header ////////// --}}
            <div class="row">
                <div class="col-sm-9">
                    <h3>Data Dosen</h3>
                </div>
                <div class="col-sm-3">
                    <div class="row g-3">
                        <div class="col-sm 9">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Nama Dosen">
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
                        <th>NIP</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dataDosen as $index => $dosen)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $dosen->nama }}</td>
                      <td>{{ $dosen->nomor_registrasi }}</td>
                      <td>{{ $dosen->email }}</td>
                      <td>{{ $dosen->nomor_telepon }}</td>
                      <td>{{ $dosen->nama_jurusan }}</td>
                      <td>
                        <a href="{{ route('edit.dosen', ['id' => $dosen->nomor_registrasi]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('delete.dosen', ['id' => $dosen->nomor_registrasi]) }}" class="btn btn-danger btn-sm" >Delete</a>
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
