<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas akhir pekan 7</title>
  </head>
  <body>

    <?php

    $r = 21;
    $putaran = 200;

    //rumus Keliling lingkaran: 2*phi*r

    function kelilingLingkaran($nilai){
      return 2 * pi() * $nilai;
    };
    function jarakTempuh($kali, $keliling){
      return $kali * $keliling;
    };
   ?>


    <h3>Soal Nomor 6</h3>
    <p>Pak Andi memiliki sebuah mobil yang panjang jari-jari ban mobil
      tersebut sebesar 21 cm. Saat mobil tersebut berjalan, ban mobil
      tersebut berputar sebanyak 200 kali. Berapakah jarak yang ditempuh
      mobil tersebut?</p>

    <br><br>
    <h3>Jawaban</h3>

    <p><b>Jarak tempuhnya adalah :
      <?php echo jarakTempuh($putaran, kelilingLingkaran($r)); ?> cm</b></p>



  </body>
</html>
