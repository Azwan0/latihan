<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Online</title>
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
        }
        td {
            padding: 8px;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Form Pendaftaran Online</h2>
    <form action="proses_pendaftaran.php" method="POST">
        <table border="1">
            <tr>
                <td>Nama Lengkap:</td>
                <td><input type="text" name="nama_lengkap" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>No. Telepon:</td>
                <td><input type="tel" name="telepon" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir:</td>
                <td><input type="date" name="tanggal_lahir" required></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><textarea name="alamat" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Program Pilihan:</td>
                <td>
                    <select name="program_pilihan" required>
                        <option value="Kursus Pemrograman">Kursus Pemrograman</option>
                        <option value="Pelatihan Desain Grafis">Pelatihan Desain Grafis</option>
                        <option value="Workshop Digital Marketing">Workshop Digital Marketing</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Daftar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>