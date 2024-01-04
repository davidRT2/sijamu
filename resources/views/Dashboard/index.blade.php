@extends('Template.layout')
@section('content')

<div class="row mb-5">
    <div class="col-sm-12">
      <div class="statistics-details d-flex align-items-center justify-content-between">
        <div>
          <p class="statistics-title">Jumlah Mahasiswa</p>
          <h3 class="rate-percentage">123</h3>
          {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p> --}}
        </div>
        <div>
          <p class="statistics-title">Jumlah Dosen</p>
          <h3 class="rate-percentage">321</h3>
          {{-- <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p> --}}
        </div>
        <div>
          <p class="statistics-title">Pending Tanggapan</p>
          <h3 class="rate-percentage text-info">21</h3>
          {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> --}}
        </div>
        <div>
            <p class="statistics-title">Rechedule Tanggapan</p>
            <h3 class="rate-percentage text-warning">32</h3>
            {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> --}}
          </div>
          <div>
            <p class="statistics-title">Cancel Tanggapan</p>
            <h3 class="rate-percentage text-danger">12</h3>
            {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> --}}
          </div>
          <div>
            <p class="statistics-title">Success Tanggapan</p>
            <h3 class="rate-percentage text-success">12</h3>
            {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> --}}
          </div>
      </div>
    </div>
  </div> 

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            {{-- /////////////////////// Content ///////////////////// --}}
            <p>Selamat Datang, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, deleniti sit minima maxime id vel eligendi quam nostrum voluptatibus corporis quo. Dolor rerum dolores eligendi ab ipsum, possimus quos at deserunt nobis labore laboriosam eveniet illum dolorum est maxime quaerat ratione assumenda numquam impedit? Corporis, atque veritatis voluptatum eius dolor, a nulla voluptates magnam earum illo natus. Fugit autem omnis laudantium vero? Quibusdam, odio quia aperiam quis assumenda fuga qui nulla dolor voluptatum iste non earum quam ipsa cum beatae a deserunt voluptas ut iure recusandae! Tempora, consequuntur nobis quo sunt velit atque ut ipsam expedita officiis dolorum optio aspernatur?</p>
            {{-- /////////////////////// End Content ///////////////////// --}}
        </div>
        
    </div>
</div>

@stop
