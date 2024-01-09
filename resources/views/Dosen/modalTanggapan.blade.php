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
            <p>Nama :</p>
          </div>
          <div class="col-sm-9">
            <p id="modalNama"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <p>Tanggal Janji :</p>
          </div>
          <div class="col-sm-9">
            <p id="modalTanggal"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <p>Topik :</p>
          </div>
          <div class="col-sm-9">
            <p id="modalTopik"></p>
          </div>
        </div>
        {{-- //////////////////////// End Content ////////////////////////// --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Tolak</button>
        <button type="button" class="btn btn-warning">Reschedule</button>
        <button type="button" class="btn btn-success">Terima</button>
      </div>
    </div>
  </div>
</div>

<script>
  function openModal(button) {
    // Access the JSON-encoded data from the data-janji attribute
    var janjiData = JSON.parse(button.getAttribute('data-janji'))
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
    $('#modalTanggapanLabel').text(janjiData.nama_mahasiswa);
    $('#modalNama').text(janjiData.nama_mahasiswa);
    $('#modalTanggal').text(formattedDate + ' | ' + janjiData.tempat);
    $('#modalTopik').text(janjiData.keperluan);

    // Show the modal
    $('#modalTanggapan').modal('show');
  }
</script>
