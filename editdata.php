<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Form Edit Data</h2>

    <?php
    include "koneksi.php";
    
    $no = $_GET ['no'];
    $data = mysqli_query($kon, "select * from dbpermintaan where No = '$no'");
    while ($perlihat = mysqli_fetch_array($data)) {
        ?>

        <form action="perbaruidata.php" method="post">
            <table>
            <tr>
            <td>No</td>
            <td>:</td>
            <td>
                <input type="text" name="no" size="20" value="<?php echo $perlihat ['No']; ?>" readonly>
            </td>
        </tr>
            <tr>
            <td>Harga Per Kg</td>
            <td>:</td>
            <td>
                <input type="text" name="hargaperkg" size="30" value="<?php echo $perlihat ['Harga Per Kg']; ?>">
            </td>
        </tr>
            <tr>
            <td>Harga Permintaan</td>
            <td>:</td>
            <td>
                <input type="text" name="hargapermintaan" size="30" value="<?php echo $perlihat ['Harga Permintaan']; ?>">
            </td>
        </tr>
            <tr>
            <td>Harga Penawaran</td>
            <td>:</td>
            <td>
                <input type="text" name="hargapenawaran" size="30" value="<?php echo $perlihat ['Harga Penawaran']; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="edit"  value="Edit">
                <input type="reset" name="batal"  value="Batal">
                <input type="button" name="kembali"  value="kembali" onclick="self.history.back()">
            </td>
        </tr>
            </table>
        </form>
    <?php
    } 
    ?>
    
</body>
</html>