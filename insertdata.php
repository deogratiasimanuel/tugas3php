<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Data</title>
</head>
<body>
    <h2> Form Insert Data</h2>
    <form action="simpandata.php" method ="post">
    <table>
        <tr>
            <td>No</td>
            <td>:</td>
            <td>
                <input type="text" name="no" size="20" placeholder="isi nomor">
            </td>
        </tr>
        <tr>
            <td>Harga Per Kg</td>
            <td>:</td>
            <td>
                <input type="text" name="hargaperkg" size="20" placeholder="isi harga per kg">
            </td>
        </tr>
        <tr>
            <td>Harga Permintaan</td>
            <td>:</td>
            <td>
                <input type="text" name="hargapermintaan" size="20" placeholder="isi harga permintaan">
            </td>
        </tr>
        <tr>
            <td>Harga Penawaran</td>
            <td>:</td>
            <td>
                <input type="text" name="hargapenawaran" size="20" placeholder="isi harga penawaran">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan"  value="Simpan">
                <input type="reset" name="batal"  value="Batal">
                <input type="button" name="kembali"  value="kembali" onclick="self.history.back()">
            </td>
        </tr>
    </table>
</form>
</body>
</html>