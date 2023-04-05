<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Permintaan</title>
    <style>
        body {
            font-family:"Arial";
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            background-color:red;
            color: white;
        }
        .insert a {
            background-color: lime;
            padding: 5px;
            border-radius: 7px;
            text-decoration: none;
            color: black;
            justify-content: center;
            margin-left: 650px;
            size: 30px;
        }
        .insert a:hover {
            background-color: yellow;
        }
        th {
            background-color: cyan;
        }
    </style>
</head>
<body>
    <h2>Data Permintaan Daging Sapi</h2>
    <div class="insert">
    <a href="insertdata.php">Insert Data</a>
    </div>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspasing="0" align="center">
        <tr>
            <th>No</th>
            <th>Harga Per Kg</th>
            <th>Harga Permintaan</th>
            <th>Harga Penawaran</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php
            include "koneksi.php";
            $query = mysqli_query($kon, "SELECT * FROM dbpermintaan");
            while ($data = mysqli_fetch_array ($query)) {

            
            ?>
            <td><?php echo $data ['No']; ?></td>
            <td><?php echo $data ['Harga Per Kg']; ?></td>
            <td><?php echo $data ['Harga Permintaan']; ?></td>
            <td><?php echo $data ['Harga Penawaran']; ?></td>
            <td>
                <a href="editdata.php?no=<?php echo $data ['No']; ?>">Edit
                <hr color="red">
                <a href="hapusdata.php?no=<?php echo $data ['No']; ?>">Hapus
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>