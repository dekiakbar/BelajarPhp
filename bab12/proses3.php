<?php
$b = $_POST['bil'];

for ($i=0; $i <= $b; $i++){
	$bilangan[$i] = $_POST['in'.$i];
	
}

$min = $bilangan[0];
$max = $bilangan[0];

for ($j=0; $j < $b; $j++) { 
	if ($bilangan[$j] > $max){ 
		$max = $bilangan[$j];
	}elseif ($bilangan[$j] < $min) {
		$min = $bilangan[$j];
	}
}

echo "<p>Bilangan terbesarnya adalah : ".$max."</p>";
echo "<p>Bilangan terkecilnya adalah : ".$min."</p>";
echo "<p>Bilangan jangkauannya adalah : ".($max-$min)."</p>";
?>
