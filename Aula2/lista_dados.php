<?php

#Formas de criar array
$valores = ["teste", "teste1", "teste2"];
$valores1 = array("teste", "teste1");

echo $valores[0] . " " . $valores[1] . PHP_EOL;

echo $valores1[1] . PHP_EOL;

#Count -> Conta quantidade de valores numa lista
echo count($valores) . PHP_EOL;

for ($valor=0;$valor<count($valores);$valor++) {
	echo $valores[$valor] . PHP_EOL;
}
