<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html> 
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head> 
<body> 
<h1>Data Mahasiswa</h1>
<a href="tambah.php">+ Tambah Mahasiswa</a>
<table>
<tr><th>ID</th><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Angkatan</th><th>Aksi</th></tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_array($result)) {
    echo '<tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['nim'] . '</td>
        <td>' . $row['nama'] . '</td>
        <td>' . $row['jurusan'] . '</td>
        <td>' . $row['angkatan'] . '</td>
        <td>
            <a href="edit.php?id=' . $row['id'] . '">Edit</a> |
            <a href="hapus.php?id=' . $row['id'] . '" onclick="return confirm(\'Yakin hapus?\');">Hapus</a>
        </td>
    </tr>';
}
?>
</table> 
</body> 
</html>
