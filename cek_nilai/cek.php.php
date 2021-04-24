<!DOCTYPE html>
<html>
<head>
  <title>Cek Nilai</title>
  <style>
    .main{
      margin: 15% 30%;
      background-color: #5F9EA0;
      padding: 50px;
    }
  </style>
</head>
<body>
  <div class="main">
<form action="" method="POST">
  <h1>Cek Kelulusan Ujian</h1>
  <p>By : Jemi Yantika Damanik</p>
  Nilai Ujian : <input type="text" name="nilai">
  <input type="submit" value="Hasil">
</form>

<?php

  if ($_POST)
  {
    $nilai = $_POST['nilai'];

    if ($nilai > 100)
    {
      
      $keterangan = "Nilai Tidak Valid";
    }
    elseif ($nilai >= 90)
    {
      
      $keterangan = "Terpuji";
    }
    elseif ($nilai >= 80)
    {
      
      $keterangan = "Sangat Memuaskan";
    }
    elseif ($nilai >= 60)
    {
      
      $keterangan = "Memuaskan";
    }
    elseif ($nilai < 60)
    {
      
      $keterangan = "Tidak Lulus";
    }
    else
    {
      
      $keterangan = "Data Belum Dimasukkan dengan Benar";
    }

    echo "Keterangan Nilai";
    echo "<br>";
    echo "Nilai : " . $nilai;
    echo "<br>";
    echo "Keterangan : " . $keterangan;

  }

?>
</div>
</body>
</html>

