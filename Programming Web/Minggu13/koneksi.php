<?php

    $host = "DESKTOP-PMH47TM";

    $connInfo = array("Database" => "prakwebdb", "UID" => "sa", "PWD" => "12345");
    $koneksi = sqlsrv_connect($host, $connInfo);

    if ($koneksi) {
        echo "Koneksi Berhasil.<br />";
    } else {
        echo "Koneksi Gagal";
            die(print_r(sqlsrv_errors(), true));
    }
?>