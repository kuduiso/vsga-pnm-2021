<?php

// Phi*r^2
function hitungLuas($r) {
    $hasil = 3.14*pow($r,2);
    return $hasil;
}

// 2*Phi*r
function hitungKeliling($r) {
    $hasil = 2*3.14*$r;
    return $hasil;
}

echo "Hasil luas lingkaran = ".hitungLuas(7)." cm<br>";
echo "Hasil keliling lingkaran = ".hitungKeliling(10)." cm";

?>