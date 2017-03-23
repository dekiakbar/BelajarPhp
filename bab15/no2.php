<?php 
$min = $_POST['min'];
$max = $_POST['max'];
$hit =0;
function hitung($min,$max){
	for ($i=$min;$i<=$max;$i++) { 
		if ($i%2==1) {
			$jumlah = $jumlah + $i;
			$hit++;
		}
	}
	echo "<p>Jumlah Bilangan Ganjil : ".$jumlah."</p>";
	echo "<p>Banyaknya Bilangan ganjil : ".$hit;
}
 echo hitung($min,$max);
 ?>