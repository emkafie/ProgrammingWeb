<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lantai = $_POST['lantai'];
    $type = $_POST['type'];
    $jumlahHari = $_POST['jumlahHari'];
    $diskon = $_POST['diskon'];

    // Harga per malam berdasarkan tipe kamar
    $harga_per_malam = 0;
    if ($type == "standard") {
        $harga_per_malam = 300000;
    } elseif ($type == "superior") {
        $harga_per_malam = 400000;
    } elseif ($type == "deluxe") {
        $harga_per_malam = 500000;
    }

    // Menghitung total harga kamar
    $total_transaksi = $harga_per_malam * $jumlahHari;

    // Tambahan biaya lantai
    if ($lantai > 5) {
        $total_transaksi += 50000;
    }

    // Menghitung diskon
    $total_diskon = 0;
    if ($diskon == "member") {
        $total_diskon = $total_transaksi * 0.10; // Diskon 10%
    } elseif ($diskon == "promoHUT") {
        $total_diskon = 100000; // Diskon Rp 100.000
    }

    // Total yang harus dibayar
    $total_bayar = $total_transaksi - $total_diskon;

    // Mengembalikan hasil dalam bentuk JSON
    $response = [
        "total_transaksi" => "Rp " . number_format($total_transaksi, 0, ",", "."),
        "total_diskon" => "Rp " . number_format($total_diskon, 0, ",", "."),
        "total_bayar" => "Rp " . number_format($total_bayar, 0, ",", ".")
    ];
    echo json_encode($response);
}
?>