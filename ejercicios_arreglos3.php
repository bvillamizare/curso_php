<?php

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
$maximos = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
sort($valores);
rsort($maximos);
//var_dump($valores);
//var_dump($maximos);

for ($i=0; $i <3 ; $i++) { 
	echo $valores[$i].",	";
	# code...
}

for ($i=0; $i <3 ; $i++) { 
	echo $maximos[$i].",";
}

?>