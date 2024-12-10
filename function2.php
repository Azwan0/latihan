<?php

$nama_buah = "anggur,duren,magga,jambu,jeruk";

$array_buah = explode(",",$nama_buah);

for ($i = 0; $i < count($array_buah);$i++){
    echo $array_buah[$i];
    echo "<br>";
}