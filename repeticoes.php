<?php

$valor = 1;

while ($valor <= 10) {
	echo $valor . PHP_EOL;
	$valor++;
}


for ($valor = 1;$valor <= 10; $valor++) {
	echo $valor . PHP_EOL;
}

for ($valor = 1;$valor <= 10; $valor++) {
	if ($valor == 5) {
		#Faz que ignore tudo para baixo e volte para o loop
		continue;
	}
	echo $valor . PHP_EOL;
}


for ($valor = 1;$valor <= 10; $valor++) {
	if ($valor == 5) {
		#Parando a execucao do loop
		break;
	}
	echo $valor . PHP_EOL;
}
