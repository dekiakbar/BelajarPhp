<?php 
$ar = array(273,281,384,119,392,184,105,129,204,219,274,275,263);
$b = $_POST['bil'];
$i=0;
for (; $i < 12; $i++) { 
	if ($b == $ar[$i]) {
		echo "<p> Bilangan yang anda cari ada pada urutan ke-",$i+1,"</p>";
		echo "<p> Bilangan yang anda cari :".$b."</p>";
	}
}


 ?>