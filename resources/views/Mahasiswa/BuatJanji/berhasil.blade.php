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
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <h3>Janji Berhasil di buat</h3>
                </div>
            </div>

            <a href="/mahasiswa/buatjanji" class="btn btn-success">Kembali</a>
            {{-- /////////////////////// End Form ///////////////////// --}}

        </div>
    </div>
</div>

@stop
