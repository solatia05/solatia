<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 2</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$numRows = 5; // Jumlah baris

for ($row = 1; $row <= $numRows; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "<div class='kotak'>$col</div>";
    }
    echo "<div class='clear'></div>"; // Untuk memulai baris baru
}
?>

</body>
</html>