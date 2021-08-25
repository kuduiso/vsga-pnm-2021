<?php
require 'koneksi.php';

if(isset($_POST['update'])) {
    $arr['id_siswa'] = $_POST['id_siswa'];
    $arr['nama'] = $_POST['nama'];
    $arr['alamat'] = $_POST['alamat'];
    $arr['jenis_kelamin'] = $_POST['jeniskelamin'];
    $arr['agama'] = $_POST['agama'];
    $arr['sekolah_asal'] = $_POST['sekolahasal'];
    $result = updateData($arr);

    if($result) {
        header('location:../index.php?p=calonpeserta&message=berhasiledit');
    } else {
        header('location:../index.php?p=calonpeserta&message=gagaledit');
    }
}