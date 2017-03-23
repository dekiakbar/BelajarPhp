<?php 
$ting = $_POST['tinggi'];
$bert = $_POST['berat'];

$ideal = ($ting - 100) - (($ting - 100)*0.1);
if ((($bert - $ideal) <=2) && (($bert - $ideal) >= -2)) 
{
	echo "<p>Berat ideal anda : ",$ideal," Kg </p>";
	echo "<p>Berat Badan anda : ",$bert," Kg </p>";
	echo "<p>Berat badan dikatakan ideal jika +/- 2 Kg dari berat ideal </p>";
	echo "<p>Rentan Berat ideal ",$ideal - 2,"-",$ideal + 2," Kg</p>";
	echo "<p>Berat badan anda ideal </p>";
} 
else
{
	echo "<p>Berat ideal anda : ",$ideal," Kg </p>";
	echo "<p>Berat Badan anda : ",$bert," Kg </p>";
	echo "<p>Berat badan dikatakan ideal jika +/- 2 Kg dari berat ideal </p>";
	echo "<p>Rentan Berat ideal ",$ideal - 2,"-",$ideal + 2," Kg</p>";
	echo "<p>Berat badan anda tidak ideal </p>";
}

 ?>