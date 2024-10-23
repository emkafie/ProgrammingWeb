<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga - ABC Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        main .container {
            max-width: 600px;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        } 
        h2 {
            color: #FF8C00;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .costum-btn:hover {
            background-color: #f4f4f4;
            color: #FF8C00;
        }
    </style>
</head>
<body>

    <header class="py-3 mb-4" style="background-color:#2a2a2a">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="title">
                <a href="home.php" class="text-decoration-none">
                    <h2 class="fw-bold text-white">ABC Hotel</h2>
                </a>
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-items"><a href="home.php" class="costum-btn nav-link fw-semibold fs-4 text-white rounded px-4" style="background-color:#FF8C00">Kembali</a></li>
                </ul>
            </nav>
        </div>
    </header>

<main>
    <div class="container">
        <h2 class="text-center">Cek Harga Kamar</h2>
        <form id="cekHargaForm">
            <div class="mb-3">
                <label for="lantaiInput" class="form-label">Lantai</label>
                <input type="number" class="form-control" id="lantaiInput" name="lantai" min="1" max="10" required>
            </div>
            <div class="mb-3">
                <label for="typeSelect" class="form-label">Tipe Kamar</label>
                <select class="form-select" id="typeSelect" name="type" required>
                    <option value="standard">Standard</option>
                    <option value="superior">Superior</option>
                    <option value="deluxe">Deluxe</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlahHariInput" class="form-label">Jumlah Hari</label>
                <input type="number" class="form-control" id="jumlahHariInput" name="jumlahHari" min="1" required>
            </div>
            <div class="mb-3">
                <label for="diskonSelect" class="form-label">Diskon</label>
                <select class="form-select" id="diskonSelect" name="diskon">
                    <option value="none">Tidak Ada</option>
                    <option value="member">Member (10% diskon)</option>
                    <option value="promoHUT">Promo HUT (Diskon Rp 100.000)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning w-100">CHECK</button>
        </form>
    
        <div class="result mt-4" id="result" style="display: none;">
            <p>Total Transaksi: <span id="total-transaksi"></span></p>
            <p>Total Diskon: <span id="total-diskon"></span></p>
            <p><strong>Total yang harus dibayarkan: <span id="total-bayar" style="color: red;"></span></strong></p>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $("#cekHargaForm").submit(function(event) {
        event.preventDefault();

        let lantai = $("#lantaiInput").val();
        let type = $("#typeSelect").val();
        let jumlahHari = $("#jumlahHariInput").val();
        let diskon = $("#diskonSelect").val();

        $.ajax({
            url: "proses_harga.php",
            type: "POST",
            data: {
                lantai: lantai,
                type: type,
                jumlahHari: jumlahHari,
                diskon: diskon
            },
            success: function(response) {
                console.log(response);

                let data = JSON.parse(response);
                $("#total-transaksi").html(data.total_transaksi);
                $("#total-diskon").html(data.total_diskon);
                $("#total-bayar").html(data.total_bayar);
                $("#result").show();
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
</script>

</body>
</html>