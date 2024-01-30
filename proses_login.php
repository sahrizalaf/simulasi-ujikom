<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $koneksi->query("SELECT * FROM user WHERE Username = '$username' OR Email = '$username'");
$row = $stmt->fetch_assoc();

if($row !== null){

    if(password_verify($password, $row['Password'])){
        $_SESSION['UserID'] = $row['UserID'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Level'] = $row['Level'];
        header('Location: dashboard.php');
    } else {
        echo 'Password yang anda masukan salah';
    }

} else {
    echo "Akun tidak terdaftar!";
}