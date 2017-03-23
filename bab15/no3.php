<?php 
$w1 =$_POST['w1'];
$w2 =$_POST['w2'];

function hitung($w1,$w2){

	$b1 = explode(":",$w1);
	$b2 = explode(":",$w2);

	$j = $b1[0]-$b2[0];
	$m = $b1[1]-$b2[1];
	$d = $b1[2]-$b2[2];

	$tj = $j * 3600;
	$tm = $m * 60;
	$total = $tj + $tm + $d;
	echo "<p>Selisih waktu : ".$total."</p>";
}
	echo hitung($w1,$w2);

 ?>