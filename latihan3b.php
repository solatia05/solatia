<?php
$var1 = "Hello World";
$var2 = "";
$var3 = null;
$var4 = 0;

echo "Contoh isset():<br>";
echo "Apakah \$var1 di-set? " . (isset($var1) ? "Ya" : "Tidak") . "<br>";
echo "Apakah \$var3 di-set? " . (isset($var3) ? "Ya" : "Tidak") . "<br>";

echo "Contoh empety():<br>";
echo "Apakah \$var2 kosong? " . (empty($var2) ? "Ya" : "Tidak") . "<br>";
echo "Apakah \$var4 kosong? " . (empty($var4) ? "Ya" : "Tidak") . "<br>";
?>