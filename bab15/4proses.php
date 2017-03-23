<?php 
$nis = array("A001","A002","A003","A004","A005");
$nama = array("Agus","Budi","Amir","Acong","Siti");

for ($i=0; $i < 5; $i++) { 
	$bila[$i]=$_POST['nila'][$i];
	$bilb[$i]=$_POST['nilb'][$i];
	$rata[$i] = ($bila[$i] + $bilb[$i])/2;
}

array_multisort($rata,SORT_DESC,$nis,$nama);

echo "<!DOCTYPE html>
	<head>
		<title>No 4 | hal 134</title>
		<style>
			html { font-family: sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
			body {background-color: #f8f8f8; font-size:13px; margin:0 auto; width:900px;}
			label {margin-width:200px; vertical-align:top; float:left; min-width:200px;}
			p {clear:both; margin:5px; border-bottom:solid 1px #DBDBDB; padding:10px 0px;}
			input[type='text'], textarea {width:100px;}
			input{margin-right:-20px;margin-left:4px;}
			table{width:50%;margin-left:25%;margin-right:25%;border;}
			table, th, td {border: 1px solid black;}
			h1, h2, h3 {text-align:center;}
			p{margin-left:58%;margin-right:23%}

		</style>
	</head>	
<body>
	<h1>No 4 BAB 15 </h1>
	<form method='post' action='4proses.php'>
	<fieldset>
	<h3>Ujian Matematika</h3>
	<table>
  <tr>
    <th>NIS</th>
    <th>Nama Siswa</th> 
    <th>Nilai Rata-Rata</th>
  </tr>";

for ($j=0; $j <= count($rata)-1; $j++) { 
	echo "
  	<tr>
    <td>".$nis[$j]."</td>
    <td>".$nama[$j]."</td>
    <td>".$rata[$j]."</td>
    </tr>

  	";
}

echo"</table>
	</fieldset>
	</form>


</body>
</html>";
//reference http://stackoverflow.com/questions/7880619/multiple-inputs-with-same-name-through-post-in-php
?>