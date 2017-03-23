<?php 
$sal = $_POST['saldo'];
$bung = $_POST['bunga'];
$lam = $_POST['lama'];
$saldoAkhir= $sal + ($sal * ($bung * $lam)) ;

echo "<p>Saldo awal Rp = ".$sal. "</p>";
echo "<p>Bunga Per Bulan = ".$bung. "</p>";
echo "<p>Lama Bulan = ".$lam. "</p>";
echo "<p>Jumlah Saldo Akhir = ".$saldoAkhir. "</p>";
 
 ?>
