<?php
include "koneksi.php";
$nim = $_GET['nim'];

$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim'")
);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Mahasiswa</title></head>
<body>
<h2>Edit Data Mahasiswa</h2>

<form method="POST" action="proses_edit.php">
    NIM:<br>
    <input type="text" name="nim" value="<?= $data['nim']; ?>" readonly><br><br>

    Nama:<br>
    <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br><br>

    Jurusan:<br>
    <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required><br><br>

    Email:<br>
    <input type="email" name="email" value="<?= $data['email']; ?>"><br><br>

    Tanggal Lahir:<br>
    <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>"><br><br>

    <button type="submit">Update</button>
</form>
</body>
</html>
