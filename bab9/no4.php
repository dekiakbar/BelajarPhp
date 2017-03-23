<?php 
$bintang = $_POST['bin'];

for ($i=0;$i<$bintang;$i++) { 
	for ($j=0;$j<=$i;$j++){ 
		echo "*";
	}

	echo "<p></p>";
}
 ?>