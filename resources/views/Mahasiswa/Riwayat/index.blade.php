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
            <div class="col-sm-9">
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
              <th>Nama Dosen</th>
              <th>Waktu</th>
              <th>Keperluan</th>
              <th>Tempat</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dataJanji as $index => $janji)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $janji->nama_dosen }}</td>
              <td>{{ $janji->tanggal }}</td>
              <td>{{ $janji->keperluan }}</td>
              <td>{{ $janji->tempat }}</td>
              <td>
                @if($janji->status == 'diterima')
                <span class="badge bg-success">Diterima</span>
                @elseif($janji->status == 'reschedule')
                <a type="button" class="btn btn-warning">
                  <span class="badge bg-warning text-dark">Reschedule</span>
                </a>
                @elseif($janji->status == 'ditolak')
                <span class="badge bg-danger">Ditolak</span>
                @elseif($janji->status == 'diajukan')
                <span class="badge bg-secondary text-dark">Menunggu Respon</span>
                @endif
              </td>
            </tr>
            @endforeach
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