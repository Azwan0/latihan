<?php
function buatTabel($n, $jenis) {
    echo "<table border='1' cellpadding='5' cellspacing='0' style='margin: 10px; float: left;'>";
    
    // Judul tabel
    echo "<tr><th colspan='" . ($n + 1) . "' style='text-align: center;'>";
    if ($jenis == "penjumlahan") {
        echo "Tabel Penjumlahan";
    } elseif ($jenis == "perkalian") {
        echo "Tabel Perkalian";
    } elseif ($jenis == "pangkat") {
        echo "Tabel Pangkat";
    }
    echo "</th></tr>";
    
    // Baris header
    echo "<tr><th>*</th>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";
    
    // Isi tabel
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $n; $j++) {
            if ($jenis == "penjumlahan") {
                $hasil = $i + $j;
            } elseif ($jenis == "perkalian") {
                $hasil = $i * $j;
            } elseif ($jenis == "pangkat") {
                $hasil = pow($i, $j);
            }
            echo "<td>$hasil</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Ukuran tabel (misalnya 10)
$n = 10;

// Menampilkan tabel
buatTabel($n, "penjumlahan");
buatTabel($n, "perkalian");
buatTabel($n, "pangkat");
?>