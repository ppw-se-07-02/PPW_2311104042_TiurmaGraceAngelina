<?php
include "koneksi.php";
$data = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT * FROM produk WHERE id=$_GET[id]")
);
?>
<form method="POST" action="update.php">
<input type="hidden" name="id" value="<?= $data['id'] ?>">
Nama: <input name="nama" value="<?= $data['nama_produk'] ?>"><br>
Harga: <input name="harga" value="<?= $data['harga'] ?>"><br>
Stok: <input name="stok" value="<?= $data['stok'] ?>"><br>
<button>Update</button>
</form>
