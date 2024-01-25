<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $koneksi->query("SELECT * FROM petugas WHERE username = '$username'");
$row = $stmt->fetch_assoc();

if($row !== null){

    if(password_verify($password, $row['password'])){
        $_SESSION['id_petugas'] = $row['id_petugas'];
        $_SESSION['username'] = $row['username'];
        header('Location: dashboard.php');
    } else {
        echo 'Password yang anda masukan salah';
    }

} else {
    echo "Akun tidak terdaftar!";
}