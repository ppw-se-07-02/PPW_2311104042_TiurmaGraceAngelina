<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
<h2>Tambah Data Mahasiswa</h2>

<form method="POST" action="proses_tambah.php">
    NIM:<br>
    <input type="text" name="nim" required><br><br>

    Nama:<br>
    <input type="text" name="nama" required><br><br>

    Jurusan:<br>
    <input type="text" name="jurusan" required><br><br>

    Email:<br>
    <input type="email" name="email"><br><br>

    Tanggal Lahir:<br>
    <input type="date" name="tanggal_lahir"><br><br>

    <button type="submit">Simpan</button>
</form>
</body>
</html>
