<?php
    $nama = @$_GET['nama']; //tanda @ supaya tidak ada peringatan error ketika key kosong
    $usia = @$_GET['usia'];

    echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>