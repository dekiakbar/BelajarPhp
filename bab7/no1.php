<?php 

$thn = $_POST['tahun'];

if($thn % 400 == 0) {
	echo "<p>Tahun : ".$thn." merupakan tahun kabisat</p>";
}
else {
	echo "<p>Tahun : ".$thn." bukan tahun kabisat</p>";
}
?>