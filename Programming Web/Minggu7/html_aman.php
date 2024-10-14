<?php
    $input = $_POST['input'];
    // $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "<p>Data yang Anda Masukkan:  $input</p>";

    
    $email = $_POST['email'];
    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
      echo "Email yang Valid: ";
      echo "<span>" . htmlspecialchars($email,ENT_QUOTES,'UTF-8') . "</span>";
    } else {
        echo "Email Tidak Valid";
    }
?>