<?php 
$bintang = $_POST['bin'];
$i = 0;
$j = 0;
while ($i <= $bintang) {
	$j=0;
	while ($j < $i) {
		echo "*";
		$j++;
	}
	
	echo "<p></p>";
	$i++;
}
 ?>