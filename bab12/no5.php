<?php

$koba = array(1001,1002,1003,1004,1005,1006,1007,1008,1009,1010);
$naba = array("Sabun Lifebuoy","Permen Blaster","Pasta Gigi Pepsodent","Madu Arbain","Kecap ABC","Saus Tomat ABC","Gula Gulaku","Rinso",
			  "Super Pel","Permen Tango");
$harga = array(1500,5600,4560,30000,7250,6700,8900,7100,6450,5600); 

$n = $_POST['bil'];

echo "<!DOCTYPE html>
	<head>
		<title>No 5 | hal 135</title>
		<style>
			html { font-family: sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
			body {background-color: #f8f8f8; font-size:13px; margin:0 auto; width:900px;}
			label {margin-width:200px; vertical-align:top; float:left; min-width:200px;}
			p {clear:both; margin:5px; border-bottom:solid 1px #DBDBDB; padding:10px 0px;}
			input[type='text'], textarea {width:100px;}
			table{width:50%;margin-left:25%;margin-right:25%;border;}
			table, th, td {border: 1px solid black;}
			h1, h2, h3 {text-align:center;}
			p{margin:0 25%}
			td{text-align:center;}

		</style>
	</head>	
<body>
	<h1>No 5 BAB 15 </h1>
	<form method='post' action='proses5.php'>
	<fieldset>
	<h3>Kasir</h3>
	<table>
	<tr>
    <th>Kode</th>
    <th>Nama Barang</th> 
    <th>Harga</th>
  	</tr>";

	for ($j=0; $j < count($koba); $j++) { 
		echo "
  	<tr>
    <td>".$koba[$j]."</td>
    <td>".$naba[$j]."</td>
    <td>".$harga[$j]."</td>
    </tr>";
	}
	echo "</table>";
	for ($i = 0; $i <= $n-1; $i++){
		echo "<p>Barang ke-".($i+1)."
				<input type='text' placeholder='kode barang' name='kode".$i."'/>
				<input type='text' placeholder='jumlah barang' name='jumlah".$i."'/>
			  </p>";
	}

if ($n != 0) {
	
	echo"
		<p><button type='submit'>Tampilkan</button></p>
		<input type='hidden' name='bil' value='".$n."' />
	</fieldset>
	</form>


</body>
</html>";

}

?>