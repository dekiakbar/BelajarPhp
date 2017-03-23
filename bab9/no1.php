<?php 
$a = $_POST['ayam'];
$b = $a;

echo "<p>Anak ayam turun ".$a."</p>";
for($i=$a;$i>0;$i--){
	$b--;
	if ($b > 0) {
		echo "<p>Anak ayam turun ".$i.",mati satu tinggal ".$b."</p>";
	} else {
		echo "<p>Anak ayam turun ".$i.",mati satu tinggal induknya </p>";
	}
	
}
 	
 ?>
