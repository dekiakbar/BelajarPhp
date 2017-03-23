<?php 
include "config.php";
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>No 4 | Hal 87</title>
	<style>
		.body{width: 100%;margin: 0;padding: 0;}
		<?php echo "$kolom"; ?>
		<?php echo "$header"; ?>
		footer{width: 100%;float: left;padding: 10px;background-color: rgba(100,100,255,0.7);}

	</style>
</head>
<body>

	<header>
		<h3>Nama Situs Anda</h3>
	</header>
	
	<section class="kolom">

	<div class="kolkiri">
		<p>Link</p>
		<p>Link</p>
		<p>Link</p>
	</div>

	<div class="kolkanan">
	
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
	echo "<p> Saldo Akhir Anda = Rp.".$s1.",-</p>";
	?>

	</div>
		
	</section>
	<footer>
		<p>Copyright</p>
	</footer>

</body>
</html>