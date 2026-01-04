<?php
include "koneksi.php";

// Ambil keyword pencarian jika ada
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Query data (dengan atau tanpa pencarian)
$query = "SELECT * FROM mahasiswa
          WHERE nim LIKE '%$keyword%'
          OR nama LIKE '%$keyword%'
          ORDER BY nim ASC";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<!-- Tombol tambah data -->
<a href="form_tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<!-- Form Pencarian -->
<form method="GET">
    <input type="text" name="keyword" placeholder="Cari NIM atau Nama"
           value="<?= htmlspecialchars($keyword); ?>">
    <button type="submit">Cari</button>
    <?php if ($keyword != "") { ?>
        <a href="tampil_data.php">Reset</a>
    <?php } ?>
</form>

<br>

<!-- Tabel Data -->
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nim']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['tanggal_lahir']; ?></td>
        <td>
            <a href="form_edit.php?nim=<?= $row['nim']; ?>">Edit</a> |
            <a href="hapus.php?nim=<?= $row['nim']; ?>"
               onclick="return confirm('Yakin hapus data ini?')">
               Hapus
            </a>
        </td>
    </tr>
    <?php
        }
    } else {
        echo "<tr><td colspan='7' align='center'>Data tidak ditemukan</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
mysqli_close($conn);
?>
