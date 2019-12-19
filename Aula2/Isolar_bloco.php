<?php

/*
Diferenca de subrotina para funcao

Subrotina executa o que tem que executar e fim
Funcao retorna alguma coisa após o processamento
*/

//Exemplo de subrotina
function exibirMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

exibirMensagem("Mensagem");

//Sub rotinas não necessitam de parametros
function helloWord() {
    exibirMensagem("Hello Word");
}

helloWord();

//Retornar valores de subrotinas
function retornoValores($valor) {
    return $valor * 2;
}

exibirMensagem(retornoValores(2));