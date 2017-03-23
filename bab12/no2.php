<?php
$bil = array(9283, 182, 381, 119, 391, 591,123, 124, 284, 215, 312);

$pb = $bil[0];

for ($i = 0; $i <= count($bil)-1; $i++)
{
if ($bil[$i] < $pb) $pb = $bil[$i];
}

echo "Bilangan terbesarnya adalah : ".$pb;
?>