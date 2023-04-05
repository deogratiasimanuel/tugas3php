<?php
include "koneksi.php";

$no = $_POST['no'];
$hargaperkg = $_POST['hargaperkg'];
$hargapermintaan = $_POST['hargapermintaan'];
$hargapenawaran = $_POST['hargapenawaran'];

$simpan = mysqli_query($kon, "insert into dbpermintaan values ('$no', '$hargaperkg', '$hargapermintaan', '$hargapenawaran')");

if ($simpan) {
    echo "<script> alert ('Data Tersimpan')</script>";
    header ("refresh:1;index.php");
}else {
    echo "<script> alert ('Data Gagal Tersimpan')</script>";
    header ("refresh:1;index.php");
}

?>