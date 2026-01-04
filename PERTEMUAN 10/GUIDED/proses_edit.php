<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];

mysqli_query($conn, "
UPDATE mahasiswa SET
nama='$nama',
jurusan='$jurusan',
email='$email',
tanggal_lahir='$tanggal_lahir'
WHERE nim='$nim'
");

header("Location: tampil_data.php");
?>
