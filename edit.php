<?php
include("config/db.php");
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head><title>Edit Mahasiswa</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<h2>Edit Mahasiswa</h2>
<form action="proses_edit.php" method="post">
<input type="hidden" name="id" value="<?= $data['id'] ?>">
NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br>
Angkatan: <input type="number" name="angkatan" value="<?= $data['angkatan'] ?>"><br>
<input type="submit" value="Simpan">
</form>
<a href="index.php">Kembali</a>
</body>
</html>