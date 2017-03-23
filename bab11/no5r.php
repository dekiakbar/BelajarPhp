
<?php 
include "config.php";
include "header.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>No 5 | Hal 87</title>
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

	</div>
		
	</section>
	<footer>
		<p>Copyright</p>
	</footer>

</body>
</html>
