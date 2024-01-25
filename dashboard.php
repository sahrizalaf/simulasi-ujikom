<?php

session_start();

if(isset($_SESSION['username'])){
    echo 'Anda telah login sebagai '. $_SESSION['username'];
    echo '. <a href="logout.php">Logout</a>';
} else {
    echo 'Anda belum login, silahkan login terlebih dahulu pada halaman <a href="login.php">berikut</a>';
}