<?php 
$nama = $_POST['nama'];
setcookie("test",$nama,time()+3600);

echo 

"<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>No 1 | hal 117</title>
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
	<h1>No 1 BAB 14 </h1>
	<form method='post' action='no1.php'>
	<fieldset>
	<p><h1>Selamat datang ".$_COOKIE['test']." di website kami<h1><p>
	<p>
		<button type='submit'>Kembali</button>
	</p>
	</fieldset>
	</form>


</body>
</html>
	";
 ?>