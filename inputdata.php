<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa</h1>
    <form action="outputdata.php" method="post">
    <pre>
        NIM             :<input type="text" name="nim">
        Nama            :<input type="text" name="nama">
        Jenis Kelamin   :<input type="radio" name="jenkel" value="Laki-laki"> Laki-laki <input type="radio" name="jenkel" value="Perempuan"> Perempuan
        Tanggal Lahir   :<input type="date" name="tgl">
        Tempat Lahir    :<input type="text" name="tmptlhr">
        Jurusan         :<select name="jurusan"><option value="Sistem Informasi">Sistem Informasi<option value="Ilmu Komputer">Ilmu Komputer<option value="Teknik Informatika">Teknik Informatika</select>
        Tahun Masuk     :<select name="thn"><option value=""><option value="2020">2020<option value="2021">2021<option value="2022">2022<option value="2023">2023<option value="2024">2024</select>
    </pre>
    <input type="submit" value="SUBMIT">
    </form>
</body>
</html>