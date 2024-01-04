@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
            {{-- /////////// Header ////////// --}}
            <div class="row">
                <div class="col-sm-9">
                    <h3>Daftar Riwayat Janji Temu</h3>
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
                      <th>Nama Dosen</th>
                      <th>Waktu</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Setan</td>
                      <td>53275531</td>
                      <td>
                        <a type="button" class="btn btn-success">Di Terima</a>
                        <a type="button" class="btn btn-warning">Reschedule</a>
                        <a type="button" class="btn btn-danger">Di Tolak</a>
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
