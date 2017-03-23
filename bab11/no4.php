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
	<form method="post" action="no4r.php">
		<p><label>Masukan Saldo </label>
		   <input type="text" name="saldo">
		</p>

		<p><label>Masukan Lamanya Bulan </label>
		   <input type="text" name="bulan">
		</p>

		<p><button type="submit">submit</button>
		   <button type="reset">reset</button>
		</p>
	</form>
	</div>
		
	</section>
	<footer>
		<p>Copyright</p>
	</footer>

</body>
</html>