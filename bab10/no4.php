<?php 
$l = $_POST['lop'];
$a=1;
$b=1;
while ($a <= $l){
		$b=1;
	while ($b<= 10){
		echo "<p>".$a."x".$b."=",$a*$b,"</p>";
		$b++;
	}
		
	$a++;

}

 ?>