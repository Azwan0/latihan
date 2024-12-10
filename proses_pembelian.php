<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $jenis_buku = htmlspecialchars($_POST['jenis_buku']);
    $jumlah_buku = (int)$_POST['jumlah_buku'];
    $alamat_pengiriman = htmlspecialchars($_POST['alamat_pengiriman']);
    $kurir = htmlspecialchars($_POST['kurir']);
    $ongkos_kirim = (int)$_POST['ongkos_kirim'];
    $tanggal_dikirim = htmlspecialchars($_POST['tanggal_dikirim']);
    $tambahan = isset($_POST['tambahan']) ? implode(", ", $_POST['tambahan']) : 'Tidak ada';

    // Hitung total harga (misal: Harga Buku Rp 50,000 per unit)
    $harga_buku = 50000;
    $total_harga_buku = $harga_buku * $jumlah_buku;
    $total_pembayaran = $total_harga_buku + $ongkos_kirim;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembelian</title>
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
    <h2>Detail Pembelian Buku Duniailkom</h2>
    <table>
        <tr>
            <th>Nama</th>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <th>Jenis Buku</th>
            <td><?= $jenis_buku ?></td>
        </tr>
        <tr>
            <th>Jumlah Buku</th>
            <td><?= $jumlah_buku ?></td>
        </tr>
        <tr>
            <th>Alamat Pengiriman</th>
            <td><?= $alamat_pengiriman ?></td>
        </tr>
        <tr>
            <th>Kurir</th>
            <td><?= $kurir ?></td>
        </tr>
        <tr>
            <th>Ongkos Kirim</th>
            <td>Rp <?= number_format($ongkos_kirim, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Tanggal Dikirim</th>
            <td><?= $tanggal_dikirim ?></td>
        </tr>
        <tr>
            <th>Tambahan</th>
            <td><?= $tambahan ?></td>
        </tr>
        <tr>
            <th>Total Harga Buku</th>
            <td>Rp <?= number_format($total_harga_buku, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Total Pembayaran</th>
            <td>Rp <?= number_format($total_pembayaran, 0, ',', '.') ?></td>
        </tr>
    </table>
</body>
</html>