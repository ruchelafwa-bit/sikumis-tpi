<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM tamu ORDER BY waktu DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin - Buku Tamu</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h2>📋 Data Tamu</h2>
  <a href="export.php">⬇️ Export ke Excel</a> | 
  <a href="logout.php">🚪 Logout</a>
  <table border="1" cellpadding="8">
    <tr>
      <th>Waktu</th><th>NIK</th><th>Nama</th><th>Alamat</th>
      <th>Telepon</th><th>Instansi</th><th>Bertemu</th><th>Tujuan</th>
      <th>Rombongan</th><th>Foto</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?= $row['waktu'] ?></td>
      <td><?= $row['nik'] ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td><?= $row['telepon'] ?></td>
      <td><?= $row['instansi'] ?></td>
      <td><?= $row['bertemu'] ?></td>
      <td><?= $row['tujuan'] ?></td>
      <td><?= $row['rombongan'] ?></td>
      <td><?php if($row['foto']) echo "<img src='uploads/".$row['foto']."' width='80'>"; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
