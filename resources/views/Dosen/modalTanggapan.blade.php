<div class="modal fade" id="modalTanggapan" tabindex="-1" aria-labelledby="modalTanggapanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalTanggapanLabel">Tanggapan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{-- //////////////////////// Content ////////////////////////// --}}
        <div class="row">
          <div class="col-sm-3">
            <p class="fw-bold">Kode Janji:</p>
          </div>
          <div class="col-sm-9">
            <p id="modalKode"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <p class="fw-bold">Nama:</p>
          </div>
          <div class="col-sm-9">
            <p id="modalNama"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <p class="fw-bold">Tanggal Janji:</p>
          </div>
          <div class="col-sm-9">
            <p id="modalTanggal"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <p class="fw-bold">Topik:</p>
          </div>
          <div class="col-sm-9">
            <p id="modalTopik"></p>
          </div>
        </div>
        {{-- //////////////////////// End Content ////////////////////////// --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="tolakButton" onclick="tolakJanji()">Tolak</button>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="openEditModal(this)">Reschedule</button>
        <button type="button" class="btn btn-success" onclick="terimaJanji()">Terima</button>
      </div>
    </div>
  </div>
</div>

<script>
  var janjiGlobal;
  function openModal(button) {
    // Access the JSON-encoded data from the data-janji attribute
    var janjiData = JSON.parse(button.getAttribute('data-janji'))
    janjiGlobal = janjiData;
    var datetime = new Date(janjiData.tanggal);
    var formattedDate = datetime.toLocaleString('id-ID', {
      day: 'numeric',
      month: 'long', // or 'short' for abbreviated names
      year: 'numeric',
      hour: 'numeric',
      minute: 'numeric',
      hour12: false
    });
    // Update modal content with the corresponding row data
    $('#modalKode').text(janjiData.kode_janji);
    $('#modalTanggapanLabel').text(janjiData.nama_mahasiswa);
    $('#modalNama').text(janjiData.nama_mahasiswa);
    $('#modalTanggal').text(formattedDate + ' | ' + janjiData.tempat);
    $('#modalTopik').text(janjiData.keperluan);

    // Show the modal
    $('#modalTanggapan').modal('show');
  }

  /* 
    Ajax tanggapan
  */
  function tolakJanji() {
    // Ambil kode janji dari modal
    var kodeJanji = $('#modalKode').text();

    // Kirim permintaan AJAX ke server
    $.ajax({
      type: 'POST',
      url: '/tolak-janji', // Sesuaikan dengan URL yang sesuai di server Anda
      data: {
        kode_janji: kodeJanji,
        status: 'ditolak',
        _token: '{{ csrf_token() }}', // Tambahkan token CSRF di sini
      },
      success: function(response) {
        // Update UI atau lakukan hal lainnya setelah permintaan berhasil
        console.log('Data berhasil ditolak:', response);

        // Tutup modal setelah berhasil
        $('#modalTanggapan').modal('hide');
        // Arahkan pengguna ke rute /dosen/tanggapan
        window.location.href = '/dosen/tanggapan';

      },
      error: function(error) {
        console.error('Error saat menolak janji:', error);
      }
    });
  }

  function terimaJanji() {
    // Ambil kode janji dari modal
    var kodeJanji = $('#modalKode').text();

    // Kirim permintaan AJAX ke server
    $.ajax({
      type: 'POST',
      url: '/terima-janji', // Sesuaikan dengan URL yang sesuai di server Anda
      data: {
        kode_janji: kodeJanji,
        status: 'diterima',
        _token: '{{ csrf_token() }}', // Tambahkan token CSRF di sini
      },
      success: function(response) {
        // Update UI atau lakukan hal lainnya setelah permintaan berhasil
        console.log('Data berhasil diterima:', response);

        // Tutup modal setelah berhasil
        $('#modalTanggapan').modal('hide');
        // Arahkan pengguna ke rute /dosen/tanggapan
        window.location.href = '/dosen/tanggapan';

      },
      error: function(error) {
        console.error('Error saat menerima janji:', error);
      }
    });
  }


  function openEditModal(button) {
    var janjiData = janjiGlobal;
    var datetime = new Date(janjiData.tanggal);
    var formattedDate = datetime.toISOString().slice(0, 16);

    // Update modal content with the corresponding row data
    $('#kode').val(janjiData.kode_janji);
    $('#nama').val(janjiData.nama_mahasiswa);
    $('#editTanggal').val(formattedDate);
    $('#editTempat').val(janjiData.tempat);

    // Show the modal
    $('#modalEdit').modal('show');
  }
</script>