<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Data</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    NIM : <?php echo $_POST["nim"];?> <br>
    Nama : <?php echo $_POST["nama"];?> <br>
    Jenis Kelamin : <?php echo $_POST["jenkel"];?><br>
    Tanggal Lahir : <?php echo $_POST["tgl"];?><br>
    Tempat Lahir : <?php echo $_POST["tmptlhr"];?><br>
    Jurusan : <?php echo $_POST["jurusan"];?><br>
    Tahun Masuk : <?php echo $_POST["thn"];?>
</body>
</html>