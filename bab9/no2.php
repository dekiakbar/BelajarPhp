<?php 
$s = $_POST['saldo'];
$b = $_POST['bulan'];

for($i=0;$i<=$b;$i++){
	
	if ($s < 1100000) {
		$s1 = $s + (($s/100)*3);
		$s1 = $s1-9000;
	} else if($s >= 1100000){
		$s1 = $s + (($s/100)*4);
		$s1 = $s1-9000;
	}
}
echo "<p> Saldo Akhir Adna = Rp.".$s1.",-</p>";
 ?>