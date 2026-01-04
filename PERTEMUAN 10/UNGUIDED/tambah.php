<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Tambah Produk</h1>

<form method="POST" action="simpan.php">
    Nama Produk:<br>
    <input type="text" name="nama"><br><br>

    Harga:<br>
    <input type="number" name="harga"><br><br>

    Stok:<br>
    <input type="number" name="stok"><br><br>

    <button>Simpan</button>
</form>

<br>
<a href="index.php?page=produk">← Kembali</a>

</body>
</html>
