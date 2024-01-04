@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
             {{-- /////////// Header ////////// --}}
             <div class="row">
                <div class="col-sm-9">
                    <h3>Buat Janji Temu</h3>
                </div>
            </div>
            <hr>
            {{-- /////////// End Header ////////// --}}

            {{-- /////////// Form ////////// --}}

            <form class="forms-sample" action="/mahasiswa/janji-berhasil">
                <div class="form-group">
                  <label for="exampleInputUsername1">Nama Dosen</label>
                  <div class="row">
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="inputPassword2" placeholder="" disabled>
                      </div>
                      <div class="col-sm-1">
                        <button type="button" class="btn btn-primary mb-3 btn-sm" data-bs-toggle="modal" data-bs-target="#modalCariDosen">Cari</button>
                      </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputNama1">Tanggal</label>
                  <input type="datetime-local" class="form-control" id="exampleInputTanggal1" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama1">Keperluan</label>
                    <textarea  class="form-control" id="exampleInputTanggal1" placeholder="textarea" style="height: 100px"> </textarea>
                  </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a class="btn btn-light" href="/admin/data-dosen">Cancel</a>
              </form>
            {{-- /////////////////////// End Form ///////////////////// --}}

            {{-- /////////// Modal ////////// --}}
              @include('Mahasiswa.BuatJanji.modalCariDosen')
            {{-- /////////// End Modal ////////// --}}

        </div>
    </div>
</div>

@stop
