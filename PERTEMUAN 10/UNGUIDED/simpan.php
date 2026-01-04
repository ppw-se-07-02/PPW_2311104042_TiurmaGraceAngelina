<?php
include "koneksi.php";

mysqli_query($conn,
"INSERT INTO produk (nama_produk,harga,stok)
 VALUES ('$_POST[nama]','$_POST[harga]','$_POST[stok]')");

header("Location: produk.php");
?>
