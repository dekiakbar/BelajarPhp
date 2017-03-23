<?php 
$nik = array("K01001","K01002","K03001","K03002","K03003","K04001","K04002","K04003","K04004","K04005");
$nama = array("A","B","C","D","E","F","G","H","I","J");
$masa = array("20","18","12","12","10","8","11","9","7","14");

echo "<!DOCTYPE html>
	<head>
		<title>No 5 | hal 135</title>
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
			p{margin-left:25%;}
			td{text-align:center;}

		</style>
	</head>	
<body>
	<h1>No 5 BAB 15 </h1>
	<form method='post' action='proses5.php'>
	<fieldset>
	<h3>Gaji Karyawan</h3>
	<table>
  <tr>
    <th>NIK</th>
    <th>Nama </th> 
    <th>Masa Kerja</th>
    <th>Gaji</th>
  </tr>";
  for ($i=0;$i<10;$i++) { 
  	echo "
  	<tr>
    <td>".$nik[$i]."</td>
    <td>".$nama[$i]."</td>
    <td>".$masa[$i]."</td>
    <td>Rp.xxx,-</td>
  	</tr>

  	";
  }
  

echo"</table>

	<p>
		<button type='submit'>Tampilkan</button>

	</p>
	</fieldset>
	</form>


</body>
</html>";





 ?>