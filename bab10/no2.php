<?php 
$a = $_POST['ayam'];
$b = $a;

echo "<p>Anak ayam turun ".$a."</p>";
while ($a>0){
	$b--;
	if ($b > 0) {
		echo "<p>Anak ayam turun ".$a.",mati satu tinggal ".$b."</p>";
	} else {
		echo "<p>Anak ayam turun ".$a.",mati satu tinggal induknya </p>";
	}

	$a--;
}
 	
 ?>
