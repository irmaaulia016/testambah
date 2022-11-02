<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM BANTUAN BLT</title>
</head>

    <form action="prosestambah.php" method="POST">
    <h1>FORM BANTUAN BLT</h1>
<body>
    <form>
        <fieldset>
        <p>
            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama"/>
        </p>
        <p>
            <label for="jb">Jenis Bantuan:</label><br>
            <label><input type="radio" name="jb" value="Tunai"/>Tunai<br>
            <input type="radio" name="jb" value="Nontunai"/>Non Tunai<br>
            <input type="radio" name="jb" value="Beras"/>Beras<br>
            <input type="radio" name="jb" value="Minyak"/>Minyak<br>
            <input type="radio" name="jb" value="Gula"/>Gula<br>
            <label for=""></label>
        </p>
        <input type="submit" value="Kirim Bantuan" name="tambah"/>
        </p>
</form>
</fieldset>
</body>
</html>