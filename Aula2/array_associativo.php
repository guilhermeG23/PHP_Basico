<?php

$valores = ["teste","teste","teste","teste","teste"];

//Forma de mostrar um valor de uma array dentro de uma string impressa
echo "$valores[1]" . PHP_EOL;

//Forma complexa de apresentar a informação
//Permite uso de funções mais complexas
echo "{$valores['1']}" . PHP_EOL;
