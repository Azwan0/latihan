<?php

$time = time();
echo var_dump($time);
echo "<br>";
// echo date("w d M Y", $time);
// echo "Senin November 2024";

$nama_hari =['Minggu','Senin','Selasa','Rabu','Kamis','jumat','Sabtu'];

echo $nama_hari[$hari];