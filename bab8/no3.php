<?php 
$jamKer = $_POST['jam'];
$sisa = $jamKer - 48;

switch($sisa) {

case 0:
		echo "<p> Gaji Pokok Anda : Rp.",$jamKer * 2000," ,-</p>";
		echo "<p> Uang Lembur : Rp.",$sisa * 3000," ,-</p>";

case !0:
		if ($sisa > 0) {
			echo "<p> Gaji Pokok Anda : Rp.",$jamKer * 2000," ,-</p>";
			echo "<p> Uang Lembur : Rp.",$sisa * 3000," ,-</p>";
		}elseif ($sisa < 0) {
			echo "<p> Gaji Pokok Anda : Rp.",$jamKer * 2000," ,-</p>";
			echo "<p> Uang Lembur : Rp.",0 * 3000," ,-</p>";
		}

}
 ?>