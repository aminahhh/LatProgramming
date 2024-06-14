<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <form action="data_registasi.php" method="post">
    <pre>
        Isi Data Dibawah ini:
        Nama                :<input type="text" name="nama">
        Alamat              :<textarea name="alamat" rows="5" cols="40"></textarea>
        Tempat Lahir        :<input type="text" name="tmptlhr">
        Tanggal Lahir       :<input type="date" name="tgl">
        Jenis Kelamin       :<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        Pendidikan          :<select name="pendidikan"><option value="S1">S1<option value="S2">S2<option value="S3">S3</select>
    </pre>
    <input type="submit" value="TAMPIL"><input type="reset" value="BATAL">
    </form>
</body>
</html>