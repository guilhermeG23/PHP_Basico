<?php

#PHP é fracamente tipado
#Exemplo o t2 e t3,se usar o is_numeric, ele vai reconhecer a string como valor numerico
#double é valores decimais mais precisos que float
#Estes são os tipos basicos do PHP

$t1 = "teste";
$t2 = 111111;
$t3 = "111111";
$t4 = 12.11;
$t5 = true;

echo gettype($t1) . "\n";
echo gettype($t2) . "\n";
#echo gettype($t3) . "\n";
echo gettype($t4) . "\n";
echo gettype($t5) . "\n";
