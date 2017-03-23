<?php 
$b = $_POST['bin'];
$i = 0;

while ($i<$b) {
	$j=0;
	while ($j< $i) {
		echo "* ";
		$j++;
	}
	
	$i++;
	echo "<p></p>";
}

while ($b>0) {
	$k=0;

	while ($k<$b) {
		echo "* ";
		$k++;
	}

	$b--;
	echo "<p></p>";
}


 ?>