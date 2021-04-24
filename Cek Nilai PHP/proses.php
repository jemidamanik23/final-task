<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms Cek Nilai</h2>

<form action="proses.php" method="post">
  <label for="nilai">Masukkan Nilai Angka</label><br>
  <input type="text" id="nilai" name="nilai" ><br>
   <br><br>
  <input type="submit" value="Submit">
</form> 

<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$nilai = $_POST["nilai"];

if ($nilai > 100) {
    $tertulis = "Nilai Tidak Valid";
} elseif($nilai >= 90){
    $tertulis = "Terpuji";
} elseif($nilai >= 80){
    $tertulis = "Sangat Memuaskan";
} elseif($nilai >= 60){
    $tertulis = "Memuaskan ";
} elseif($nilai < 60){
    $tertulis = "Tidak Lulus";
} else {
    $tertulis = "Data Belum Dimasukkan dengan benar";
}

echo "Nilai Angka anda: $nilai<br>";
echo "Nilai tertulis: $tertulis<br><br>";
echo "<b>Note : Jika Terdapat error Undefined index: nilai in C:\xampp\htdocs\Frontend\proses.php on line 22 , itu berarti anda belum memasukkan nilai dengan benar. Silahkan masukkan nilai anda pada form dan submit!</b>";


?>

</body>
</html>
