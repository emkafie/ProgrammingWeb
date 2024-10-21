<?php
    $targetDirectory = "documents/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    if ($_FILES['files']['name'][0]) {
        $totalFiles = count($_FILES['files']['name']);
        $allowedExtension = ['jpg', 'jpeg', 'png', 'gif'];
        
        for ($i = 0; $i < $totalFiles; $i++) { 
            $fileName = $_FILES['files']['name'][$i];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $targetFile = $targetDirectory . $fileName;
            
            if (in_array($fileExtension, $allowedExtension)) {
                
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                    echo "File $fileName berhasil diunggah.<br>";
                } else {
                    echo  "Gagal mengunggah file $fileName.<br>";
                }
            } else {
                echo "File $filename bukan berupa gambar.<br>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
?>