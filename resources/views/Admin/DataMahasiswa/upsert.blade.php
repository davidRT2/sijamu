@extends('Template.layout')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
             {{-- /////////// Header ////////// --}}
             <div class="row">
                <div class="col-sm-9">
                    <h3>Upsert Mahasiswa</h3>
                </div>
            </div>
            <hr>
            {{-- /////////// End Header ////////// --}}

            {{-- /////////// Form ////////// --}}

            <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">NIM</label>
                  <input type="text" class="form-control" id="exampleInputNIM1" placeholder="NIM">
                </div>
                <div class="form-group">
                  <label for="exampleInputNama1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputNama1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputStatus1">Status</label>
                  <select name="status" id="status" class="form-control">
                    <option value="#" disabled selected>-- Pilih --</option>
                    <option value="1">Admin</option>
                    <option value="2">Dosen</option>
                    <option value="3">Mahasiswa</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="#" disabled selected>-- Pilih --</option>
                        <option value="#">IlKom</option>
                        <option value="#">RPL</option>
                        <option value="#">SisKom</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">No Telp</label>
                    <input type="text" class="form-control" id="exampleInputNo Telp1" placeholder="No Telp">
                  </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a class="btn btn-light" href="/admin/data-dosen">Cancel</a>
              </form>
            {{-- /////////////////////// End Form ///////////////////// --}}
        </div>
    </div>
</div>

@stop
