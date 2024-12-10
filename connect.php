<?php

$koneksi = mysqli_connect("localhost", "root", "", "pendaftaran");

if (!$koneksi) {
    die ("koneksi gagal: " . mysqli_connect_error());
} else {
    echo "koneksi berhasil terhubung";
}