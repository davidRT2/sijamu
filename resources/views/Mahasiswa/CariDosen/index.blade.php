@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
            {{-- /////////// Header ////////// --}}
            <div class="row">
                <div class="col-sm-9">
                    <h3>Daftar Dosen</h3>
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
                      <th>Telephone</th>
                      <th>Jurusan</th>
                      <th>Jadwal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dataDosen as $index => $puci)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $puci->nama }}</td>
                      <td>{{ $puci->nomor_registrasi }}</td>
                      <td>{{ $puci->email }}</td>
                      <td>{{ $puci->nomor_telepon }}</td>
                      <td>{{ $puci->nama_jurusan }}</td>
                      <td>
                        <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalJadwal">Lihat</button>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            {{-- /////////// End Table ////////// --}}

            {{-- /////////// Modal ////////// --}}
            @include('Mahasiswa.CariDosen.modalJadwal')
            {{-- /////////// End Modal ////////// --}}

            {{-- /////////////////////// End Content ///////////////////// --}}
        </div>
        
    </div>
</div>

@stop
