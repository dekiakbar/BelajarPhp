<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
</head>
<body>
<?php
echo "<p>============================</p>";
echo "<p>============Tugas 1===========</p>";
echo "<p>============================</p>";

$saldoAwal = 1000000;
$bunga=0.03;
$bulan= 11;
$saldoAkhir= $saldoAwal + ($saldoAwal * ($bunga * $bulan)) ;
echo "<p>saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.",- </p>";

echo "<p>============================</p>";
echo "<p>============Tugas 2===========</p>";
echo "<p>============================</p>";
$bilangan = 100;
$pembagi = 3; 
$hasilBagi = 33;
$sisaBagi = 1;
echo $bilangan." dibagi dengan ".$pembagi." adalah ".$hasilBagi." sisa ".$sisaBagi."</p>";

echo "<p>============================</p>";
echo "<p>============Tugas 3===========</p>";
echo "<p>============================</p>";
$jumlahUang = 27500;
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

echo "<p>============================</p>";
echo "<p>=======Menghubungkan Variable======</p>";
echo "<p>============================</p>";
$alamat ="<p> Alamat 1 ";
$alamat .= " dan Alamat 2";
echo $alamat."</p>";

?>

</body>
</html>