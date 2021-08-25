<?php
require '../koneksi.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE FROM tbanggota WHERE idanggota='$id'");
header("location:../index.php?p=anggota");