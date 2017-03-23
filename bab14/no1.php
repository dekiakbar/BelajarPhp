<?php
$skrg=getdate();
$wktu= $skrg["mday"]."/".$skrg["mon"]."/".$skrg["year"];

if ($_COOKIE['test']){
echo "
<!DOCTYPE html>
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
	<form method='post' action='cookie.php'>
	<fieldset>
	<p><h2>Selamat Datang Kembali ".$_COOKIE['test']."</h2></p>
	<p><h2>Anda terakhir mengunjungi halaman ini pada tanggal ".$wktu."	 
	</h2></p>
	</fieldset>
	</form>


</body>
</html>

";

}else 
echo 

"
<!DOCTYPE html>
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
	<form method='post' action='cookie.php'>
	<fieldset>
	<p>
		<label>Masukan Nama anda : </label>
		<input type='text' name='nama' />
			 
	</p>
	<p>
		<button type='submit'>Submit</button>
		<button type='reset'>Reset</button>

	</p>
	</fieldset>
	</form>


</body>
</html>
	";
?>