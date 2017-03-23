<?php 
$m = $_POST['m'];
$n = $_POST['n'];

function hitM($m,$n){
	echo"<style>p{margin: 0;padding: 0;}
				a{margin: 0;padding: 0;text-decoration: overline;}
		</style>";
	echo "<p>".$m."!</p>";
	echo "<p><a>".$m."!(".$m."-".$n.")!</a></p>";
	echo "<p>===============================</p>";
	$l=$m-$n;
	$hasilM = 1;
	$hasilN = 1;
	$hasilMN =1;
	for ($i=$m; $i >=1; $i--){ 
		$hasilM = $hasilM * $i;
		if ($i==1)
			echo $i;
		else
			echo $i."x";
	}

	echo "<p></p>";
	
	for ($j=$n;$j>=1;$j--) { 
		$hasilN = $hasilN * $j;
		if ($j==1)
			echo "<a>".$j."</a>";
		else
			echo "<a>".$j."x</a>";
	}
	echo "<a>.(".($m-$n).")!</a>";
	echo "<p>===============================</p>";
	
	
	for ($k=$l;$k>=1;$k--) { 
		$hasilMN = $hasilMN * $k;
	}
	echo "<p>Total =".($hasilM/($hasilN * $hasilMN))."<p>";
}

echo hitM($m,$n);

 ?>