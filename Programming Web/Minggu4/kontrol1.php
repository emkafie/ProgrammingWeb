<?php
    $nilaiSiswa = [85, 92, 58, 64, 55, 88, 79, 70, 96];

    sort($nilaiSiswa);

    $nilaiTerpilih = array_slice($nilaiSiswa, 2, -2);

    $totalNilai = array_sum($nilaiTerpilih);

    $rataRata = $totalNilai / count($nilaiTerpilih);

    echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
    echo "Rata-rata nilai: $rataRata <br>";
?>