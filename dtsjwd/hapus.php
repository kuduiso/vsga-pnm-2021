<?php
require './models/AnggotaModel.php';

$id = isset($_GET['idanggota']) ? $_GET['idanggota'] : header('location:./index.php');;

try {
    $result = deleteAnggota($id);
    if($result) {
        header('location:./index.php?message=terhapus');
    } else {
        header('location:./index.php');   
    }
} catch(Exception $e) {
    echo "Error: ".$e;
}