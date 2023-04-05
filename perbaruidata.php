<?php
include "koneksi.php";

$no = $_POST ['no'];
$hargaperkg = $_POST ['hargaperkg'];
$hargapermintaan = $_POST ['hargapermintaan'];
$hargapenawaran = $_POST ['hargapenawaran'];

$perbarui = mysqli_query($kon, "perbarui dbpermintaan set Harga Per Kg='$hargaperkg'  Harga Permintaan='$hargapermintaan' 
Harga Penawaran='$hargapenawaran' where No='$no'");

   if ($perbarui) {
        echo '<script> alert ("Data Teredit")</script>';
        header ("refresh:1;index.php");
    }else {
        echo '<script> alert ("Data Gagal Teredit")</script>';
        header ("refresh:1;index.php");
    }
?>