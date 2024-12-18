<?php
// Fungsi untuk menghitung pangkat
function pangkat($angka, $pangkat) {
    return pow($angka, $pangkat); //Menggunakan fungsi pow bawaan PHP
}

// Contoh penggunaan fungsi
$angka = 5;
$pangkat = 4;
echo "$angka pangkat $pangkat" = " . pangkat($angka, $pangkat)";
?>