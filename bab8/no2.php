<?php 

$gaj = $_POST['gaji'];
$ja = $_POST['jam'];
$gol = $_POST['golong'];
$sisa = $ja % 48;
$sisa1 = $ja - 48;

switch ($gol){
case "A":
		if ($ja <= 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 4000,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
		}elseif ($ja > 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 4000,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa1 * 3000,",-</p>";
		}
		break;
case "B":
		if ($ja <= 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 5000,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
		}elseif ($ja > 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 5000,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa * 3000,",-</p>";
		}
		break;
case "C" :
		if ($ja <= 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 6000,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
		}elseif ($ja > 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 6000,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa1 * 3000,",-</p>";
		}
case "D" :
		if ($ja <= 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 7500,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
		}elseif ($ja > 48) {
			echo "<p> Gaji pokok anda :Rp ",$gaj * 7500,",-</p>";
			echo "<p> Gaji lembur anda :Rp ",$sisa1 * 3000,",-</p>";
		}
}
 ?>