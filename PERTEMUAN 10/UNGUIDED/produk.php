<?php
include "koneksi.php";
$keyword = isset($_GET['cari']) ? $_GET['cari'] : "";

$query = "SELECT * FROM produk
          WHERE nama_produk LIKE '%$keyword%'";
$data = mysqli_query($conn, $query);
?>

<h2>Data Produk</h2>

<form method="GET">
    <input type="hidden" name="page" value="produk">
    <input type="text" name="cari" placeholder="Cari produk">
    <button>Cari</button>
</form>

<br>
<a href="tambah.php">+ Tambah Produk</a>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($row=mysqli_fetch_assoc($data)){ ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama_produk'] ?></td>
    <td><?= $row['harga'] ?></td>
    <td><?= $row['stok'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id'] ?>"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
