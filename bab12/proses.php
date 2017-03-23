<?php
$n = $_POST['bil'];
for ($i=0; $i <= $n - 1; $i++)
{
$bilangan[$i] = $_POST['data'.$i];
}
$jumlah = 0;
for ($i=0; $i <= $n - 1; $i++)
{
$jumlah += $bilangan[$i];
}
$rataRata = $jumlah/$n;
echo "Rata-ratanya adalah : ".$rataRata;
?>