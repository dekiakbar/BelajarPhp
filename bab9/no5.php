<?php 
$a = $_POST['nil'];

 for($i=1;$i<=$a; $i++){
    for($j=1;$j<=$a;$j++){
        for($k=1;$k<=$a;$k++){
           if( ($i + $j + $k) == $a)
           {echo "x =".$i.", y =".$j.", z =".$k;}
        }
  		echo "<p></p>";
    }
 }
 ?>