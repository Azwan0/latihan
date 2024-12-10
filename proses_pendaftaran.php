<?php
include_once("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
    $email = htmlspecialchars($_POST['email']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $program_pilihan = htmlspecialchars($_POST['program_pilihan']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            padding: 8px;
            border: 1px solid black;
            text-align: left;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Detail Pendaftaran Online</h2>
    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td><?= $nama_lengkap ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <th>No. Telepon</th>
            <td><?= $telepon ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $jenis_kelamin ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?= $tanggal_lahir ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <th>Program Pilihan</th>
            <td><?= $program_pilihan ?></td>
        </tr>
    </table>
</body>
</html>