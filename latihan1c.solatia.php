<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, initial-scale=1.0">
    <title>Latihan1c.php</title>
    <style>
       .container {
          display: grid;
          grid-template-columns:repeat(3, 50px);
          grid-template-rows:repeat(3, 50px);
          gap: 10px;
          justify-content: center;
          align-items: center;
       }
       .box {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 50px;
          height: 50px;
          border: 1px solid black;
          font-size: 24px;
       }
       /* Untuk posisi layout kontak yang spesifik */
       .item1 { grid-column: 2; }
       .item2 { grid-column: 1; }
       .item3 { grid-column: 2; }
       .item4 { grid-column: 3; }
       .item5 { grid-column: 1; }
       .item6 { grid-column: 2; }
       .item7 { grid-column: 3; }
    </style>
</head>
<body>

<div class="container">
   <?php
       // Variabel huruf
       $A = 'A';
       $B = 'B';
       $C = 'C';
       
       // Menampilkan huruf sesuai dengan posisi yang diinginkan
       echo "<div class='box
item1'>$A</div>";
       echo "<div class='box
item2'>$A</div>";
       echo "<div class='box
item3'>$B</div>";
       echo "<div class='box
item4'>$C</div>";
       echo "<div class='box
item5'>$A</div>";
       echo "<div class='box
item6'>$B</div>";
       echo "<div class='box
item7'>$C</div>";
   ?>
</div>

</body>
</html>