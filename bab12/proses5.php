<?php 
$koba = array(1001,1002,1003,1004,1005,1006,1007,1008,1009,1010);
$naba = array("Sabun Lifebuoy","Permen Blaster","Pasta Gigi Pepsodent","Madu Arbain","Kecap ABC","Saus Tomat ABC","Gula Gulaku","Rinso",
			  "Super Pel","Permen Tango");
$harga = array(1500,5600,4560,30000,7250,6700,8900,7100,6450,5600); 

$n = $_POST['bil'];

for ($i=0; $i < $n; $i++) { 
	$kode[$i]=$_POST['kode'.$i];
	$jumlah[$i]=$_POST['jumlah'.$i];

}
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
    <th>Jumlah</th> 
    <th>Harga</th>
  	</tr>";

  	for ($k=0; $k < count($koba) ; $k++) { 
  		for ($j=0; $j <$n ; $j++) { 
  		
  		if ($kode[$j]==$koba[$k]) {
  			echo "
  				<tr>
    			<td>".$koba[$k]."</td>
    			<td>".$naba[$k]."</td>
    			<td>".$jumlah[$j]."</td>
    			<td>".$harga[$k]*$jumlah[$j]."</td>
    			</tr>";
    			$total +=$harga[$k]*$jumlah[$j];
		}
		}
	}
	
	echo "</table><p><h3>Total Belanjaan : ".$total."<h3></p>";

if ($n != 0) {
	
	echo"
		<input type='hidden' name='bil' value='".$n."' />
		</fieldset>
		</form>
		</body>
		</html>";

}

 ?>