
<?php
$n = $_POST['bil'];

echo "<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>No 3 | hal 97</title>
		<style>
			html { font-family: sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
			body {background-color: #f8f8f8; font-size:13px; margin:0 auto; width:900px;}
			label {margin-width:200px; vertical-align:top; float:left; min-width:200px;}
			p {clear:both; margin:5px; border-bottom:solid 1px #DBDBDB; padding:10px 0px;}
			input[type='text'], textarea {min-width:250px;}

			h1, h2, h3 {text-align:center;}
		</style>
	</head>	
<body>
	<h1>No 3 BAB 12 </h1>
	<form method='post' action='proses3.php'>
	<fieldset>
";
echo "<table>";
for ($i = 0; $i <= $n-1; $i++){
	echo "<p>
		<label>Masukan Bilangan ke-".($i+1)." : </label>
		<input type='text' name='in".$i."' />
	</p>
	";
}
	echo "
	<input type='hidden' name='bil' value='".$n."' />
	<p>
		<button type='submit'>Submit</button>
		<button type='reset'>Reset</button>

	</p>
	</fieldset>
	</form>";
?>