<div class="modal fade" id="modalCariDosen" tabindex="-1" aria-labelledby="modalCariDosenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalCariDosenLabel">Tanggapan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- //////////////////////// Content ////////////////////////// --}}
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Jurusan</th>
                    <th></th>
                </tr>
              </thead>
              <tbody id="tabelDosenBody">
              </tbody>
            </table>
          </div>
          {{-- //////////////////////// End Content ////////////////////////// --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function cariDosen() {
        var query = document.getElementById('nama').value;

        $.ajax({
            url: '/mahasiswa/cari-dosen',
            type: 'GET',
            data: { query: query },
            success: function (data) {
                // Perbarui tabel dengan hasil pencarian
                updateTabel(data);
            }
        });
    }

    function updateTabel(data) {
        var tableBody = document.getElementById('tabelDosenBody');
        tableBody.innerHTML = '';
        var count = 1;
        // Tambahkan hasil pencarian ke dalam tabel
        data.forEach(function (item) {
            var row = '<tr>';
            row += '<td>' + count + '</td>';
            row += '<td>' + item.nama + '</td>';
            row += '<td>' + item.nomor_registrasi + '</td>';
            row += '<td>' + item.email + '</td>';
            row += '<td>' + item.nomor_telepon + '</td>';
            row += '<td>' + item.nama_jurusan + '</td>';
            row += '<td><button type="button" class="btn btn-success btn-sm" onclick="pilihDosen(\'' + item.nama + '\', \'' + item.nomor_registrasi + '\')">Pilih Dosen</button></td>';
            row += '</tr>';
            count++;
            tableBody.innerHTML += row;
        });
    }

    function pilihDosen(nama, noReg) {
        // Set nilai input dengan data dosen yang dipilih
        document.getElementById('nama').value = nama;
        document.getElementById('NIP').value = noReg;

        // Tutup modal
        $('#modalCariDosen').modal('hide');
    }
</script>
