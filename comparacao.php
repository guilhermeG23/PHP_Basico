<?php

$valor = 31;

#Estrutura comum if-elseif-else
#Estrutura de blocos definifido por usar o {} para determinar o bloco
if ($valor > 10 and $valor < 20) {
	echo "funciona" . PHP_EOL;
} elseif ($valor > 30) {
	echo "quase funcionando" . PHP_EOL;
} else {
	echo "nao funciona" . PHP_EOL;
}

#Operar em uma linha
#Valido por que ele entende a linha apos a decisao, mas como nao é um bloco de instrução, ele nao entede mais de uma linha
if ($valor > 10 and $valor < 20) 
	echo "funciona" . PHP_EOL;
elseif ($valor > 30) 
	echo "quase funcionando" . PHP_EOL;
else
	echo "nao funciona" . PHP_EOL;

