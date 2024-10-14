<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nama =  $_POST["nama"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $errors = array();

        //Validasi Nama
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }

        //Validasi Email
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }

        if (strlen($password) < 8) {
            echo "Password minimal 8 karakter";
            exit;
        }

        //Jika ada kesalahan Validasi
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            //Lanjutkan dengan pemrosesan data jika semua validasi berhasil
            // Misalnya, menyimpan data ke database atau mengirim email
            echo "Data berhasil dikirim: Nama = $nama, Email = $email";
        }

    }
?>