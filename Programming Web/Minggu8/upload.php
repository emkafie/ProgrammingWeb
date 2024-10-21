<?php
    if (isset($_POST["submit"])) {
   
        $targetdir = "uploads/"; //direktori tujuan untuk menyimpan file
        $targetfile  = $targetdir . basename($_FILES["myfile"]["name"]);
        $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
        
        $allowedExtension = array("jpg", "jpeg", "png", "gif");
        $maxSize = 5*1024*1024;
        //Set ukuran thumbnail
        $thumbnailW = 200;


        if (in_array($fileType, $allowedExtension) && $_FILES["myfile"]["size"]<=$maxSize) {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
                echo "File berhasil diunggah.";  
                    
                    $gambar = imagecreatefrompng($targetfile);
                    $originalWidth = imagesx($gambar);
                    $originalHeight = imagesy($gambar);

                    $thumbnailH = (int)($thumbnailW * $originalHeight / $originalWidth);
                    if ($thumbnailH < 1) {
                        $thumbnailH = 1;
                    }

                    $thumbnail = imagecreatetruecolor($thumbnailW, $thumbnailH);

      
                    imagecopyresampled($thumbnail, $gambar, 0, 0, 0, 0, $thumbnailW, $thumbnailH, $originalWidth, $originalHeight);

         
                    $thumbnailPath = $targetdir . 'thumbnail_' . basename($targetfile);
                    imagepng($thumbnail, $thumbnailPath);
                    imagedestroy($thumbnail);
                    imagedestroy($gambar);
                echo '<br> Thumbnail berhasil dibuat: <img src=:"' . $thumbnailPath . '">';

            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum";

        }



    }
?>