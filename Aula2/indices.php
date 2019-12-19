<?php

#Array comum -> Valor define o indice
$teste = [1,2,3,4,5,6,7,8,9];

/*
 * Por baixo do panos o php faz
 * 0 => 1
 * 1 => 2
 *
 *  E todo o resto
 */

#Adicionar um valor no ultimo indice do array
$teste[] = 10;

#Array associativo
#Definimos o indice do valor e onde ele é armazenado
$valores1 = [
	"valor1" => "1",
	"valor2" => "2",
	"valor3" => "3"
];
$valores2 = [
	"valor1" => "4",
	"valor2" => "5",
	"valor3" => "6"
];
$valores3 = [
	"valor1" => "7",
	"valor2" => "8",
	"valor3" => "9"
];

#Parecido com um dicionario do python
echo $valores1["valor1"] . PHP_EOL;

#Arrays de array -> Matriz
$valores = [$valores1, $valores2, $valores3];

#Chamando um valor parecido com uma matriz
echo $valores[1]["valor2"] . PHP_EOL;

#foreach -> Para cada
foreach ($valores as $valor) {
	echo $valor["valor1"] . PHP_EOL;
}

#Caso não sabemos o indice podemos fazer dessa forma
$valores = [
	"teste1" => $valores1, 
	"teste2" => $valores2, 
	"teste3" => $valores3
];

#Valores é o array 
#titulos é o valor generico dos indices dentro do array
#valor é os valores que cada titulo carrega
#podemos dar um $valor["chave"] por que chamamos uma chave dentro dos valores que estam sendo referenciados
foreach ($valores as $titulos => $valor) {
	echo $valor["valor1"] . PHP_EOL;
}

#Podemos fazer dessa forma tambem
$valores = [
	"teste1" => [
		"t1" => "1",
		"t2" => "2"
	], 
	"teste2" => [
		"t1" => "1",
		"t2" => "2"	
	], 
	"teste3" => [
		"t1" => "1",
		"t2" => "2"
	]
];

#Adicionando itens no array
$valores["teste4"] = [
	"t1" => "1",
	"t2" => "2"
];

foreach ($valores as $titulos => $valor) {
	echo $valor["t1"] . PHP_EOL;
}

#Fazendo o incremento no ultimo valor de umarray associativo

$valores = [
	100 => [
		"t1" => 1
	],
	101 => [
		"t1" => 1
	],
	102 => [
		"t1" => 1
	]
];

#Incrementando em um associativo de number
#Ele pega o valor mais alto das chaves e incrementa com um valor acima
$valores[] = [
	"t1" => 2
]; 

foreach ($valores as $titulos => $valor) {
	echo $valor["t1"] . PHP_EOL;
}

#Agora, como fazer um incremental com chaves string
#Se voce mudar a chave para inteiro o php vai entender que a string é inteiro e vai continuar como inteiro
#O array associativo so trabalho com inteiros ou strings -> Como ele é fracamente tipado, ele pode considerar uma string como um valor numerico
$valores = [
	"10-0" => [
		"t1" => 1
	],
	"10-1" => [
		"t1" => 1
	],
	"10-2" => [
		"t1" => 1
	],
	"103" => [
		"t1" => 1
	]
];
$valores[] = [
	"t1" => 2
];
foreach ($valores as $titulos => $valor) {
	echo $titulos . " " . $valor["t1"] . PHP_EOL;
}
$valores = [
	"10-0" => [
		"t1" => 1
	],
	"10-1" => [
		"t1" => 1
	],
	"10-2" => [
		"t1" => 1
	],
	"10-3" => [
		"t1" => 1
	]
];
$valores[] = [
	"t1" => 2
];
foreach ($valores as $titulos => $valor) {
	echo $titulos . " " . $valor["t1"] . PHP_EOL;
}
