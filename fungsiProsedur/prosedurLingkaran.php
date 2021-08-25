<?php

function hitungLuas($r) {
    $hasil = 3.14*pow($r,2);
    echo "Luas lingkaran = ".$hasil." cm";
}

function hitungKeliling($r) {
    $hasil = 2*3.14*$r;
    echo "Keliling lingkaran = ".$hasil." cm";
}

// MENAMPILKAN OUTPUT
hitungLuas(7);
echo "<br>";
hitungKeliling(10);

?>