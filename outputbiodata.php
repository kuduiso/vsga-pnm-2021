<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = $_POST['jenisKelamin'];
    
    // Hitung Usia
    $today = new Datetime(date('Y-m-d'));
    $diff = date_diff(new DateTime($tanggalLahir), $today);

    if (!isset($jenisKelamin) || $nama == "" || $alamat == "" || $tempatLahir == "" || $tanggalLahir == "") {
        header("location:formbiodata.php?message=kosong");
    }

    echo "<h1>Biodata</h1>";
    echo "Nama: ".$nama."<br/>";
    echo "Alamat: ".$alamat."<br/>";
    echo "Tempat Lahir: ".$tempatLahir."<br/>";
    echo "Tanggal Lahir: ".$tanggalLahir."<br/>";
    echo "Jenis Kelamin: ".$jenisKelamin."<br/>";
    printf("Usia: %d tahun",$diff->y);

?>