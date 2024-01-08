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
                      <th>NIP</th>
                      <th>Email</th>
                      <th>Telephone</th>
                      <th>Jurusan</th>
                      <th>Jadwal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Sena</td>
                      <td>53275531</td>
                      <td>0213123213</td>
                      <td>0213123213</td>
                      <td>Elektro</td>
                      <td>
                        <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalJadwal">Lihat</button>
                    </td>
                    </tr>
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
