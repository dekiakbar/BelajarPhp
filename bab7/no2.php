<?php 
$jamKer = $_POST['jam'];
$sisa = $jamKer - 48;
if ($sisa == 0) {
	echo "<p> Gaji Pokok Anda : Rp.",$jamKer * 2000," ,-</p>";
	echo "<p> Uang Lembur : Rp.",$sisa * 3000," ,-</p>";
}else if ($sisa > 0) {
	echo "<p> Gaji Pokok Anda : Rp.",$jamKer * 2000," ,-</p>";
	echo "<p> Uang Lembur : Rp.",$sisa * 3000," ,-</p>";
}
elseif ($sisa < 0) {
	echo "<p> Gaji Pokok Anda : Rp.",$jamKer * 2000," ,-</p>";
	echo "<p> Uang Lembur : Rp.",0 * 3000," ,-</p>";
}
 ?>