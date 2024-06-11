<?php
$host = "localhost"; // Nama host
$user = "root"; // Nama pengguna database
$password = ""; // Kata sandi pengguna database
$database = "uts_312310156"; // Nama database yang digunakan

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi  == false) {
    echo"gagal";
    die();
} else {
    echo"Berhasil";
}
?>