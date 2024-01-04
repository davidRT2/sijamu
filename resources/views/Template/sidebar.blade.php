<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          {{-- /////////////////////////////// Menu Admin ///////////////////////////////--}}
          <li class="nav-item nav-category">Menu Admin</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#mahasiswa" aria-expanded="false" aria-controls="mahasiswa">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Mahasiswa</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="mahasiswa">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/data-mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/upsert-mahasiswa">Tambah Mahasiswa</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#dosen" aria-expanded="false" aria-controls="dosen">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Dosen</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="dosen">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/data-dosen">Data Dosen</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/upsert-dosen">Tambah Dosen</a></li>
              </ul>
            </div>
          </li>
          {{-- /////////////////////////////// End Admin ///////////////////////////////--}}
          {{-- /////////////////////////////// Menu Mahasiswa ///////////////////////////////--}}
          <li class="nav-item nav-category">Menu Mahasiswa</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#r-janji" aria-expanded="false" aria-controls="r-janji">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Janji Temu</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="r-janji">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/mahasiswa/riwayat">Riwayat Janji Temu</a></li>
                <li class="nav-item"> <a class="nav-link" href="/mahasiswa/buatjanji">Buat Janji Temu</a></li>
                <li class="nav-item"> <a class="nav-link" href="/mahasiswa/caridosen">Cari Dosen</a></li>
              </ul>
            </div>
          </li>
          {{-- /////////////////////////////// End Mahasiswa ///////////////////////////////--}}
          {{-- /////////////////////////////// Menu Dosen ///////////////////////////////--}}
          <li class="nav-item nav-category">Menu Dosen</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tanggapan" aria-expanded="false" aria-controls="tanggapan">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Tanggapan</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="tanggapan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/dosen/tanggapan">Tanggapan Janji Temu</a></li>
              </ul>
            </div>
          </li>
          {{-- /////////////////////////////// End Dosen ///////////////////////////////--}}
          {{-- <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../assets/pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../assets/pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../assets/pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../assets/pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../assets/pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </nav>