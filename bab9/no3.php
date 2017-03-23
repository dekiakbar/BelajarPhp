<?php 
$l = $_POST['lop'];

for($a=0;$a<=$l;$a++){

	for($b=0;$b<=10;$b++){

		echo "<p>".$a."x".$b."=",$a*$b,"</p>";
	}
}

 ?>