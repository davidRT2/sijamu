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
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Setan</td>
                  <td>53275531</td>
                  <td>setan@mail.cion</td>
                  <td>0213123213</td>
                  <td>Gambar bkp</td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm" >Pilih Dosen</button>
                </td>
                </tr>
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