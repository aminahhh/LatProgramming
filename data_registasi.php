<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrsi</title>
</head>
<body>
    <h1>Data Registrasi</h1>

    <table border=1>
        <tr>
            <td colspan=2 align="center"><b>Data Mahasiswa</b></td>
        </tr>
        <tr>
            <td>Nama</td><td><?php echo $_POST["nama"];?></td>
        </tr>
        <tr>
            <td>Alamat</td><td><?php echo $_POST["alamat"];?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td><?php echo $_POST["tmptlhr"];?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td><?php echo $_POST["tgl"];?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td><?php echo $_POST["jenis_kelamin"];?></td>
        </tr>
        <tr>
            <td>pendidikan</td><td><?php echo $_POST["pendidikan"];?></td>
        </tr>
    </table>
    <a href="tugas6.php">BACK TO HOME</a>
</body>
</html>