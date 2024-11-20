<?php
include 'koneksi.php';
include 'csrf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $query = "UPDATE anggota SET nama = ?, jenis_kelamin = ?, alamat = ?, no_telp = ? WHERE id = ?";
    $stmt = $db1->prepare($query);
    $stmt->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Data berhasil diperbarui"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal memperbarui data"]);
    }

    $stmt->close();
}
?>
