<?php

function cekStatus($nilai) {
    if ($nilai >= 80 ) {
        return "Lulus";
    } elseif ($nilai >= 60) {
        return "Ulangi";
    } elseif ($nilai <= 59) {
        return "Gagal/Tidak Lulus";
    } else {
        return "Nilai tidak valid";
    }
}

// Masukkan tiga nilai
$nilaiazwan = 85;
$nilaitegar = 70;
$nilaiyafi = 50;

// Evaluasi setiap nilai
$statusazwan = cekStatus($nilaiazwan);
$statustegar = cekStatus($nilaitegar);
$statusyafi = cekStatus($nilaiyafi);

// Tampilkan hasil
echo "Nilai azwan: $nilaiazwan - Status: $statusazwan<br>";
echo "Nilai tegar: $nilaitegar - Status: $statustegar<br>";
echo "Nilai yafi: $nilaiyafi - Status: $statusyafi<br>";
?>