<?php

session_start();

if(isset($_SESSION['Username'])){
    session_destroy();
    header('Location: login.php');
}