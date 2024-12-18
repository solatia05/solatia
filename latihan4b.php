<!DOCTYPE html>
<html>
<head>
    <title>Latihan4b.php</title>
</head>
<body>

<?php 
//Array awal dengan 5 negara ASEAN
$negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>

<h3>Daftar Negara ASEAN awal:</h3>
<ul>
    <?php foreach ($negara_asean as $negara): ?>
        <li><?php echo $neegara; ?></li>
    <?php endforeach; ?>
    </ul>

<?php// Menambahkan 3 negara baru ke dalam array
array_push($negara_asean, "Laos", "Filipina", "Myanmar");
?>

<h3>Daftar Negara ASEAN baru:</h3>
<ul>
    <?php foreach ($negara_asean as $negara): ?>
        <li><?php echo $negara; ?></li>
    <?php endforeach; ?>
    </ul>

    </body>
    </html>
