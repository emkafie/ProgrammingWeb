<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- csrf tokem -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <!-- bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.min.css">
    <title>Data Anggota</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff">
            CRUD Dengan Ajax
        </a>
    </nav>

    <div class="container">
        <h2 align="center" style="margin: 30px;">Data Anggota</h2>

        <div id="alert" class="alert alert-success d-none" role="alert">
            Data Berhasil Disimpan
        </div>

        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                    </div>
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required="true">
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>

            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa-solid fa-floppy-disk pr-1"></i> Simpan
                </button>
            </div>
        </form>
        <hr>

        <div class="data"></div>

    </div>

    <div class="text-center">@ <?php echo date('Y') ?> Copyright
        <a href="https://google.com/"> Desain dan Pemrogramman Web</a>
    </div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- datatable -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.data').load("data.php");

            $("#simpan").click(function() {
                var data = $('.form-data').serialize();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');

                data += "&csrf_token=" + encodeURIComponent(csrf_token);

                var jenkel1 = document.getElementById("jenkel1");
                var jenkel2 = document.getElementById("jenkel2");
                var nama = document.getElementById("nama").value;
                var alamat = document.getElementById("alamat").value;
                var no_telp = document.getElementById("no_telp").value;

                if (nama == "") {
                    document.getElementById("err_nama").innerHTML = "Nama Harus Diisi";
                } else {
                    document.getElementById("err_nama").innerHTML = "";
                }
                if (alamat == "") {
                    document.getElementById("err_alamat").innerHTML = "Alamat Harus Diisi";
                } else {
                    document.getElementById("err_alamat").innerHTML = "";
                }
                if (!jenkel1.checked && !jenkel2.checked) {
                    document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin Harus Dipilih";
                } else {
                    document.getElementById("err_jenis_kelamin").innerHTML = "";
                }
                if (no_telp == "") {
                    document.getElementById("err_no_telp").innerHTML = "No Telepon Harus Diisi";
                } else {
                    document.getElementById("err_no_telp").innerHTML = "";
                }

                // Jika validasi sukses
                if (nama != "" && alamat != "" && (jenkel1.checked || jenkel2.checked) && no_telp != "") {
                    $.ajax({
                        type: 'POST',
                        url: "form_action.php",
                        data: data,
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                $('.data').load("data.php");
                                document.getElementById("id").value = "";
                                document.getElementById("form-data").reset();

                                $('#alert').text(response.message).removeClass('d-none').addClass('alert-success');

                                setTimeout(function() {
                                    $('#alert').addClass('d-none');
                                }, 3000);
                            } else {
                                $('#alert').text(response.message).removeClass('d-none').addClass('alert-danger');
                            }
                        },
                        error: function(xhr) {
                            $('#alert').text("Terjadi kesalahan: " + xhr.responseText).removeClass('d-none').addClass('alert-danger');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>