<?php
require 'koneksi.php';

$result = deleteData($_GET['id']);
if ($result) {
    header('location:../index.php?p=calonpeserta&message=berhasildelete');
} else {
    header('location:../index.php?p=calonpeserta&message=gagaldelete');
}