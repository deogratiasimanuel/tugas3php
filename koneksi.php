<?php

$host ="localhost";
$user ="root";
$pass ="";
$database ="phptugas3";

$kon = mysqli_connect($host, $user, $pass);
if ($kon) {
    $open = mysqli_select_db($kon,$database);
    // echo "Database Terhubung";
    if (!$open) {
        echo "Database Gagal";
    }
}else{
    echo "Mysql tidak ada";
}
?>