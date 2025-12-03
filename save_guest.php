<?php
include 'config.php';

$nik      = $_POST['nik'];
$nama     = $_POST['nama'];
$alamat   = $_POST['alamat'];
$telepon  = $_POST['telepon'];
$instansi = $_POST['instansi'];
$bertemu  = $_POST['bertemu'];
$tujuan   = $_POST['tujuan'];
$rombongan= $_POST['rombongan'];

$fotoName = "";
if (!empty($_FILES['foto']['name'])) {
    $fotoName = time() . "_" . basename($_FILES["foto"]["name"]);
    $target = "uploads/" . $fotoName;
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target);
}

$sql = "INSERT INTO tamu (nik,nama,alamat,telepon,instansi,bertemu,tujuan,rombongan,foto) 
        VALUES ('$nik','$nama','$alamat','$telepon','$instansi','$bertemu','$tujuan','$rombongan','$fotoName')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data tamu berhasil disimpan!'); window.location='index.html';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
