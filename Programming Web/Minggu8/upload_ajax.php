<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $targetDirectory = "documents/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true); // Membuat folder jika belum ada
    }

    $totalFiles = count($_FILES['files']['name']); // Menghitung jumlah file yang di-upload

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file

        if (in_array($file_ext, $allowedExtensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan untuk $file_name adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, $targetDirectory . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        }
    }

    // Menampilkan semua kesalahan jika ada
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>