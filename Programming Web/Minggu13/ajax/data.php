<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <table id="example" class="table table-striped table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>No Telp</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM anggota ORDER BY id DESC";
            $sql = $db1->prepare($query);
            $sql->execute();
            $res1 = $sql->get_result();

            if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
                    $id = $row['id'];
                    $nama = $row['nama'];
                    $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan';
                    $alamat = $row['alamat'];
                    $no_telp = $row['no_telp'];
            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $jenis_kelamin; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $no_telp; ?></td>
                        <td>
                            <button id="<?php echo $id; ?>" class="btn btn-success btn-sm ubah"> <i class="fa fa-edit"></i> Edit </button>
                            <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus"> <i class="fa fa-trash"></i> Hapus </button>
                        </td>
                    </tr>

                <?php }
            } else { ?>
                <tr>
                    <td colspan="7">Tidak ada data ditemukan</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="edit-id" name="id">
                        <div class="form-group">
                            <label for="edit-nama">Nama</label>
                            <input type="text" class="form-control" id="edit-nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-jenis-kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="edit-jenis-kelamin" name="jenis_kelamin" required>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-alamat">Alamat</label>
                            <input type="text" class="form-control" id="edit-alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-no-telp">No Telp</label>
                            <input type="text" class="form-control" id="edit-no-telp" name="no_telp" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                    <input type="hidden" id="delete-id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();

            function ajaxRequest(url, data, successCallback) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    headers: {
                        'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: successCallback,
                    error: function (xhr, status, error) {
                        alert("An error occurred: " + xhr.responseText);
                    }
                });
            }

            $('.ubah').click(function () {
                const id = $(this).attr('id');
                const row = $(this).closest('tr');
                const nama = row.find('td:eq(1)').text();
                const jenis_kelamin = row.find('td:eq(2)').text() === 'Laki-laki' ? 'L' : 'P';
                const alamat = row.find('td:eq(3)').text();
                const no_telp = row.find('td:eq(4)').text();

                $('#edit-id').val(id);
                $('#edit-nama').val(nama);
                $('#edit-jenis-kelamin').val(jenis_kelamin);
                $('#edit-alamat').val(alamat);
                $('#edit-no-telp').val(no_telp);

                $('#editModal').modal('show');
            });

            $('#editForm').submit(function (e) {
                e.preventDefault();
                ajaxRequest('edit_anggota.php', $(this).serialize(), function (response) {
                    alert(response.message);
                    if (response.status === 'success') {
                        $('#editModal').modal('hide');
                        location.reload();
                    }
                });
            });

            $('.hapus').click(function () {
                $('#delete-id').val($(this).attr('id'));
                $('#deleteModal').modal('show');
            });

            $('#confirmDelete').click(function () {
                ajaxRequest('hapus_anggota.php', { id: $('#delete-id').val() }, function (response) {
                    alert(response.message);
                    if (response.status === 'success') {
                        $('#deleteModal').modal('hide');
                        location.reload();
                    }
                });
            });
        });
    </script>
</body>

</html>