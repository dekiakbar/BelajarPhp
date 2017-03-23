<?php 
$bilangan = $_POST['pertama'];
$bagi = $_POST['pembagi'];

$sisa = $bilangan % $bagi ;
$hasil = ($bilangan - $sisa)/$bagi;

echo "<p>Bilangan Utama :".$bilangan."</p>";
echo "<p>Bilangan Pembagi :".$bagi."</p>";
echo "<p>Hasil Bagi :".$hasil."</p>";
echo "<p>Sisa Bagi :".$sisa."</p>";

 ?>