<?php 
$b = $_POST['bin'];
while ($b>=0) {
	$j=0;
	while ($j<$b) {
		echo "* ";
		$j++;
	}
	$b--;
	echo "<p></p>";
}
 ?>