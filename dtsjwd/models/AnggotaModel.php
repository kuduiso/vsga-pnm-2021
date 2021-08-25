<?php

$conn = mysqli_connect("localhost", "root", "", "dbpusb");

if (mysqli_connect_errno()) {
    echo "Koneksi gagal: ".mysqli_connect_error();
    exit();
}

function inputAnggota($arr) {
    // var_dump($arr);
    $idanggota = $arr['idanggota'];
    $nama = $arr['nama'];
    $jeniskelamin = $arr['jeniskelamin'];
    $alamat = $arr['alamat'];
    $status = $arr['status'];
    $result = mysqli_query($GLOBALS['conn'], "INSERT INTO tbanggota VALUES('$idanggota', '$nama', '$jeniskelamin', '$alamat', '$status')");
    return $result;
}

function getAllAnggota() {
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM tbanggota");
    if (!$result) {
        echo "Error: ".mysqli_error($GLOBALS['conn']);
        exit();
    }

    return $result;
}

function getAnggotaById($id) {
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM tbanggota WHERE idanggota='$id'");
    if (!$result) {
        echo "Error: ".mysqli_error($GLOBALS['conn']);
        exit();
    }

    return $result;
}

function updateAnggota($arr) {
    $idanggota = $arr['idanggota'];
    $nama = $arr['nama'];
    $jeniskelamin = $arr['jeniskelamin'];
    $alamat = $arr['alamat'];
    $status = $arr['status'];

    $result = mysqli_query($GLOBALS['conn'], "UPDATE tbanggota SET nama='$nama', jeniskelamin='$jeniskelamin', alamat='$alamat', status='$status' WHERE idanggota = '$idanggota'");
    return $result;
}

function deleteAnggota($id) {
    $result = mysqli_query($GLOBALS['conn'], "DELETE FROM tbanggota WHERE idanggota = '$id'");
    if(!$result) {
        echo "Error: ".mysqli_error($GLOBALS['conn']);
        exit();
    }

    return $result;
} 