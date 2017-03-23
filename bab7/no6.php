<?php 

$gaj = $_POST['gaji'];
$ja = $_POST['jam'];
$gol = $_POST['golong'];
$sisa = $ja % 48;
$sisa1 = $ja - 48;

if ($gol == "A" || $gol == "a") {
	if ($ja <= 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 4000,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
	}elseif ($ja > 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 4000,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa1 * 3000,",-</p>";
	}
}elseif ($gol == "B" || $gol == "b") {
	if ($ja <= 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 5000,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
	}elseif ($ja > 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 5000,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa * 3000,",-</p>";
	}
}elseif ($gol == "C" || $gol == "c") {
	if ($ja <= 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 6000,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
	}elseif ($ja > 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 6000,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa1 * 3000,",-</p>";
	}
}elseif ($gol == "D" || $gol == "d") {
	if ($ja <= 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 7500,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa * 0,",-</p>";
	}elseif ($ja > 48) {
		echo "<p> Gaji pokok anda :Rp ",$gaj * 7500,",-</p>";
		echo "<p> Gaji lembur anda :Rp ",$sisa1 * 3000,",-</p>";
	}
}
 ?>