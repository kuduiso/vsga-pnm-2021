<?php
    $server = 'localhost';
    $user = 'root';
    $passwd = '';
    $db = 'db_pmb';

    $conn = mysqli_connect($server, $user, $passwd, $db);

    if (!$conn) {
        echo "Koneksi gagal: ".mysqli_connect_error();
        exit();
    }

    function insertData($arr) {
        $result = mysqli_query($GLOBALS['conn'], "INSERT INTO siswa(nama_siswa, alamat, jenis_kelamin, agama, sekolah_asal) VALUES('{$arr['nama']}', '{$arr['alamat']}', '{$arr['jenis_kelamin']}', '{$arr['agama']}', '{$arr['sekolah_asal']}')");
        return $result;
    }

    function getData() {
        $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM siswa");
        return $result;
    }

    function getSingleData($id) {
        $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM siswa WHERE id_siswa=$id");
        return $result;
    }

    function updateData($arr) {
        $result = mysqli_query($GLOBALS['conn'], "UPDATE siswa SET nama_siswa='{$arr['nama']}', alamat='{$arr['alamat']}', jenis_kelamin='{$arr['jenis_kelamin']}', agama='{$arr['agama']}', sekolah_asal='{$arr['sekolah_asal']}' WHERE id_siswa = {$arr['id_siswa']}");
        return $result;
    }

    function deleteData($id) {
        $result = mysqli_query($GLOBALS['conn'], "DELETE FROM siswa WHERE id_siswa=$id");
        return $result;
    }

