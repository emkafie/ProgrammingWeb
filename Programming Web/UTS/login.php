<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Harus terisi";
    } elseif (strlen($password) < 5) {
        echo "Password minimal 5 karakter";
    } elseif (!preg_match('/[0-9]/', $password) || !preg_match('/[a-zA-Z]/', $password)) {
        echo "Password harus terdiri dari huruf dan angka";
    } else {

        $_SESSION['username'] = $username;
        echo "success";
    }
}


?>
