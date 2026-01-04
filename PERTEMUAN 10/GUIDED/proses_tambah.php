<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$query = "INSERT INTO mahasiswa VALUES (
    '$nim', '$nama', '$jurusan', '$email', '$tanggal_lahir'
)";

mysqli_query($conn, $query);

header("Location: tampil_data.php");
?>
