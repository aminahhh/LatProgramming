<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<link href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <center>
        <br>
        <br>
        <form action="hasil.php" method="post">
    <table>
        <tr>
            <td><input type="text"class="form-control" required name="nama" placeholder="Masukkan Nama Anda"></td>
        </tr>
        <tr>
            <td><input type="number"class="form-control" required name="nim" placeholder="Masukkan NIM Anda"></td>
        </tr>
        <tr>
            <td><input type="date"class="form-control" required name="ttl" placeholder="Masukkan TTL Anda"></td>
        </tr>

        <tr>
            <td><button type="submit" name="kirim" class="btn btn-info">proses</button></td>
        </tr>

        </tr>
    </table>
    </center>
</body>
</html>