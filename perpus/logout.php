<?php
session_start();
unset($_SESSION['id_admin']);
unset($_SESSION['sesi']);
if(isset($_SESSION['sesi']) && isset($_SESSION['id_admin'])) {
    header('location:index.php');
} else {
    header('location:login.php');
}