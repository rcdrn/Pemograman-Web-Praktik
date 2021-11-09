<!DOCTYPE <html>
<html>

<head>
    <title> Data Mahasiswa </title>
    <link rel="stylesheet" href="style.css" type="text/css" />

<body>
    <p>Data Kamu</p><br>
</body>
</head>

</html>
<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    echo "Nama Anda : $nama<br/>";
    $tanggal_lahir = $_POST['tanggal_lahir'];
    echo "Tanggal Lahir Anda : $tanggal_lahir<br/>";
    $alamat = $_POST['alamat'];
    echo "Alamat Anda : $alamat</br>";
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    echo "Jenis Kelamin Anda : $Jenis_Kelamin</br>";
    $Pekerjaan = $_POST['Pekerjaan'];
    echo "Pekerjaan Anda : $Pekerjaan</br>";
}
