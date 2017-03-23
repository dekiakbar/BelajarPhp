<?php 
include 'header.php'; 
echo"	<form method='post' action='pros.php'>
	<fieldset>
	<p>
		<label>Masukan username : </label>
		<input type='text' name='user' />
			 
	</p>
	<p>
		<label>Masukan password : </label>
		<input type='text' name='pass' />
			 
	</p>
	<p>
		<button type='submit'>Submit</button>
		<button type='reset'>Reset</button>

	</p>
	</fieldset>
	</form> ";
include 'footer.php'; 
?>

