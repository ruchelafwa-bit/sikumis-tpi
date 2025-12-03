<?php
include 'config.php';
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Data_Tamu.xls");

$result = mysqli_query($conn, "SELECT * FROM tamu ORDER BY waktu DESC");
echo "Waktu\tNIK\tNama\tAlamat\tTelepon\tInstansi\tBertemu\tTujuan\tRombongan\n";
while($row = mysqli_fetch_assoc($result)) {
    echo $row['waktu']."\t".$row['nik']."\t".$row['nama']."\t".$row['alamat']."\t".$row['telepon']."\t".$row['instansi']."\t".$row['bertemu']."\t".$row['tujuan']."\t".$row['rombongan']."\n";
}
?>
