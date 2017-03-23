<?php 
$umur = $_POST['usia'];

if ($umur > 0 && $umur < 5) {
	echo "<p>Umur anak anda termasuk : Balita </p>";
}else if($umur >= 6 && $umur < 16){
	echo "<p>Umur anak anda termasuk : Anak - anak </p>";
}else if($umur >= 17 && $umur < 50){
	echo "<p>Umur anak anda termasuk : Dewasa </p>";
}else if($umur >= 50){
	echo "<p>Umur anak anda termasuk : Tua </p>";
}

 ?>