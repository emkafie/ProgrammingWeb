<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "a = {$a} <br> b = {$b}";
    echo "<br><br>";

    echo "Hasil Tambah : {$hasilTambah} <br>";
    echo "Hasil Kurang : {$hasilKurang} <br>";
    echo "Hasil Kali : {$hasilKali} <br>";
    echo "Hasil Bagi : {$hasilBagi} <br>";
    echo "sisaBagi : {$sisaBagi} <br>";
    echo "pangkat : {$pangkat} <br>";
    
    echo "<br>";
    
    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilKecilSama = $a <= $b;
    $hasilBesarSama = $a >= $b;
    
    echo "Hasil Sama : {$hasilSama} <br>";
    echo "Hasil Tidak Sama : {$hasilTidakSama} <br>";
    echo "Hasil Lebih Kecil : {$hasilLebihKecil} <br>";
    echo "Hasil Lebih Besar : {$hasilLebihBesar} <br>";
    echo "Hasil Kecil Sama : {$hasilKecilSama} <br>";
    echo "Hasil Besar Sama : {$hasilBesarSama} <br>";

    echo "<br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil And : {$hasilAnd} <br>";
    echo "Hasil Or : {$hasilOr} <br>";
    echo "Hasil Not A : {$hasilNotA} <br>";
    echo "Hasil Not B : {$hasilNotB} <br>";

    echo "<br>";

    $a += $b;
    echo "Hasil A += B : $a <br>"; 

    $a -= $b;
    echo "Hasil A -= B : $a <br>"; 
    
    $a *= $b;
    echo "Hasil A *= B : $a <br>"; 
    
    $a /= $b;
    echo "Hasil A /= B : $a <br>"; 
    
    $a %= $b;
    echo "Hasil A %= B : $a <br>"; 

    echo "<br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Hasil Identik : {$hasilIdentik} <br>";
    echo "Hasil Tidak Identik : {$hasilTidakIdentik} <br>";
?>