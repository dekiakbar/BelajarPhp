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
    <th>Gaji Kotor</th>
  </tr>";
//=====================================================

for ($i=0; $i < 10; $i++) { 

$jab[$i] =substr($nik[$i],2,1); 
	
	if ($jab[$i]==1) {
		if ($masa[$i]>15) {
			$gapok[$i]=2000000 +500000;
		}elseif ($masa[$i]<=15 && $masa[$i]>=10) {
			$gapok[$i]=2000000 +300000;
		}elseif ($masa[$i]<10) {
			$gapok[$i]=2000000 +100000;
		}
	}elseif ($jab[$i]==3) {
		if ($masa[$i]>15) {
			$gapok[$i]=1900000 +500000;
		}elseif ($masa[$i]<=15 && $masa[$i]>=10) {
			$gapok[$i]=1900000 +300000;
		}elseif ($masa[$i]<10) {
			$gapok[$i]=1900000 +100000;
		}
	}elseif ($jab[$i]==4) {
		if ($masa[$i]>15) {
			$gapok[$i]=1950000 +500000;
		}elseif ($masa[$i]<=15 && $masa[$i]>=10) {
			$gapok[$i]=1950000 +300000;
		}elseif ($masa[$i]<10) {
			$gapok[$i]=1950000 +100000;
		}
	}

	$gakot[$i] = number_format($gapok[$i],0," ",".");
	$total +=$gapok[$i];
	echo "
  	<tr>
    <td>".$nik[$i]."</td>
    <td>".$nama[$i]."</td>
    <td>".$masa[$i]."</td>
    <td>Rp.".$gakot[$i].",-</td>
  	</tr>

  	";
}
$total = number_format($total,0," ",".");
//=====================================================
echo"
	
	<tr>
    <td></td>
    <td></td>
    <td>Total</td>
    <td>Rp.".$total.",-</td>
  	</tr>

	</table>
	</fieldset>
	</form>


</body>
</html>";
 ?>