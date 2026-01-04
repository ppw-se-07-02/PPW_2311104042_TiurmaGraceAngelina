<?php
include "koneksi.php";
mysqli_query($conn,"DELETE FROM produk WHERE id=$_GET[id]");
header("Location: produk.php");
?>
