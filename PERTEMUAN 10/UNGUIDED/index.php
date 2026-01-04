<!DOCTYPE html>
<html>
<head>
    <title>Pertemuan 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>hayy hayy</h1>
<p>iya brow</p>

<hr>

<!-- MENU -->
<a href="index.php?page=produk">Kelola Produk</a>

<hr>

<!-- AREA KONTEN -->
<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'produk') {
        include "produk.php";
    }
} else {
    echo "<p>Selamat datang di halaman utama.</p>";
}
?>

</body>
</html>
