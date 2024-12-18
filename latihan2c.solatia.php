<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 2c</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            margin: 5px;
        }
        .clear {
            clear: both;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>

<?php
$numRows = 5; // Jumlah baris

for ($row = 1; $row <= $numRows; $row++) {
    // Tentukan apakah baris ganjil atau genap
    $rowClass = ($row % 2 == 0) ? 'genap' : 'ganjil';
    
    // Loop untuk kolom, sebanyak nilai dari $row
    for ($col = 1; $col <= 5; $col++) {
        echo "<div class='kotak $rowClass'>$col</div>";
    }
    echo "<div class='clear'></div>"; // Untuk memulai baris baru
}
?>

</body>
</html>