@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
            {{-- /////////// Header ////////// --}}
            <div class="row">
                <div class="col-sm-9">
                    <h3>Daftar Janji</h3>
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
                      <th>Jurusan</th>
                      <th>Tempat</th>
                      <th>Waktu</th>
                      <th>Keperluan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Setan</td>
                      <td>53275531</td>
                      <td>0213123213</td>
                      <td>0213123213</td>
                      <td>ngurus SP</td>
                      <td>
                        <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalTanggapan">Lihat</button>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            {{-- /////////// End Table ////////// --}}

            {{-- /////////// Modal ////////// --}}
            @include('Dosen.modalTanggapan')
            {{-- /////////// End Modal ////////// --}}

            {{-- /////////////////////// End Content ///////////////////// --}}
        </div>
        
    </div>
</div>

@stop
