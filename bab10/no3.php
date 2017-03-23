<?php 
$s = $_POST['saldo'];
$b = $_POST['bulan'];

while ($i<= $b) {
	
	if ($s < 1100000) {
		$s1 = $s + (($s/100)*3);
		$s1 = $s1-9000;
	} else if($s >= 1100000){
		$s1 = $s + (($s/100)*4);
		$s1 = $s1-9000;
	}
	$i++;
}
echo "<p> Saldo Akhir Anda = Rp.".$s1.",-</p>";
 ?>