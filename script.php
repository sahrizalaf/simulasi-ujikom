<?php

include 'koneksi.php';

$username    = (string) readline('Masukkan Username: ');
$password    = (string) readline('Masukkan Password: ');
$namaPetugas = (string) readline('Masukkan Nama Petugas: ');
$level = (string) readline('Masukkan Level (admin/petugas): ');

echo 'Memproses data...';

$passwordHash = password_hash($password, PASSWORD_BCRYPT);
$stmt = $koneksi->query("INSERT INTO petugas VALUES (NULL, '$username', '$passwordHash', '$namaPetugas', '$level')");
if($stmt > 0){
    echo ' Berhasil input data User';
} else {
    echo ' Gagal! '.$koneksi->error;
}