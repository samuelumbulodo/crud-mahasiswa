<!DOCTYPE html>
<html>
<head><title>Tambah Mahasiswa</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<h2>Tambah Mahasiswa</h2>
<form action="proses_tambah.php" method="post">
NIM: <input type="text" name="nim" required><br>
Nama: <input type="text" name="nama" required><br>
Jurusan: <input type="text" name="jurusan" required><br>
Angkatan: <input type="number" name="angkatan" required><br>
<input type="submit" value="Simpan">
</form>
<a href="index.php">Kembali</a>
</body>
</html>