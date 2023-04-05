<?php
include "koneksi.php";

$no = $_GET ['no'];

$hapus = mysqli_query ($kon, "delete from dbpermintaan where No='$no'");

if ($hapus) {
    echo "<script> alert ('Data Terhapus')</script>";
    header ("refresh:1;index.php");
}else {
    echo "<script> alert ('Data Gagal Terhapus)</script>";
    header ("refresh:1;index.php");
}
?>