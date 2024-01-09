<!-- resources/views/Dosen/modalEdit.blade.php -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditLabel">Reschedule</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- //////////////////////// Content ////////////////////////// --}}
                <form id="editForm">
                    <div class="mb-3">
                        <label for="editTanggal" class="form-label">Kode Janji:</label>
                        <input type="text" class="form-control" id="kode" name="editTanggal" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggal" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="editTanggal" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggal" class="form-label">Tanggal:</label>
                        <input type="datetime-local" class="form-control" id="editTanggal" name="editTanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTempat" class="form-label">Tempat:</label>
                        <input type="text" class="form-control" id="editTempat" name="editTempat" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="updateJanji()">Simpan</button>
                </form>
                {{-- //////////////////////// End Content ////////////////////////// --}}
            </div>
        </div>
    </div>
</div>

<script>
   

    function updateJanji() {
        var kodeJanji = $('#kode').val();
        var tanggal = $('#editTanggal').val();
        var tempat = $('#editTempat').val();

        $.ajax({
            type: 'POST',
            url: '/reschedule-janji', // Sesuaikan dengan URL yang sesuai di server Anda
            data: {
                kode_janji: kodeJanji,
                tanggal: tanggal,
                tempat: tempat,
                _token: '{{ csrf_token() }}', // Tambahkan token CSRF di sini
            },
            success: function(response) {
                // Update UI atau lakukan hal lainnya setelah permintaan berhasil
                console.log('Data berhasil diperbarui:', response);

                // Tutup modal setelah berhasil
                $('#modalEdit').modal('hide');
                window.location.href = '/dosen/tanggapan';
            },
            error: function(error) {
                console.error('Error saat memperbarui janji:', error);
            }
        });
    }
</script>