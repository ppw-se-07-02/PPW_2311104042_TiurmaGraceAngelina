<?php
include "koneksi.php";

mysqli_query($conn,
"UPDATE produk SET
 nama_produk='$_POST[nama]',
 harga='$_POST[harga]',
 stok='$_POST[stok]'
 WHERE id='$_POST[id]'");

header("Location: produk.php");
?>
