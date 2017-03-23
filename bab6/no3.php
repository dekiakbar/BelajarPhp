<?php 
$jumlahUang = $_POST['jumlah'];
$goceng = 5000;
$duaRb = 2000;
$cebu = 1000;
$gope = 500;

$sisa = $jumlahUang % $goceng ;
$jum = ($jumlahUang - $sisa)/$goceng;
echo "<p>Jumlah Rp. 5.000 : ".$jum. " lembar </p>";

$sisa1 = $sisa % $duaRb;
$jum = ($sisa - $sisa1)/$duaRb;
echo "<p>Jumlah Rp. 2.000 : ".$jum. " lembar </p>";

$sisa2 = $sisa1 % $cebu;
$jum = ($sisa1 - $sisa2)/$cebu;
echo "<p>Jumlah Rp. 1.000 : ".$jum. " lembar </p>";

$sisa3 = $sisa2 % $gope;
$jum = ($sisa2 - $sisa3)/$gope;
echo "<p>Jumlah Rp. 500 : ".$jum. " lembar </p>";

 ?>