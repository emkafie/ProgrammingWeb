<?php

    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama. "<br/>";
        echo "Saya Berusia ". hitungUmur(1988, 2023) ." Tahun<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Emkafie", "Hallo");
    
    echo "<hr>";

    $saya = "Emkafie";
    $ucapanSalam = "Selamat Pagi";

    perkenalan($saya);

    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah ". hitungUmur(1988, 2023) . " tahun";

?>