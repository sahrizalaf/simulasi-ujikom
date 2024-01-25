<?php

$host = 'localhost';
$user = 'user_ngajar';
$pass = 'user_ngajar123';
$dbname = 'pwpbxii';

$koneksi = new mysqli($host, $user, $pass, $dbname);

if($koneksi->connect_errno){
    die('Terjadi kesalahan pada koneksi: '.$koneksi->connect_error);
}