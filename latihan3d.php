<?php
function faktorial($a) {
    if ($a <= 1) {
        return 1;
    } else {
        return $a * fakttorial($a - 1);
    }
}
$angka = 5;
echo "Faktorial dari $angka = " . faktorial($angka);
?>