<?php

$peso=100;
$altura=1.80;
$imc=$peso/$altura ** 2;

echo $imc . PHP_EOL;

if($imc<18) {
	echo "abaixo";
} elseif ($imc < 25){
	echo "dentro";
} else {
	echo "acima";
}
echo PHP_EOL;
