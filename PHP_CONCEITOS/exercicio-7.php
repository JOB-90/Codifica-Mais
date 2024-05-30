<?php

/*Exercício 7: Tabela de Multiplicação
Descrição: Faça um programa que imprime a tabela de multiplicação de 1 até 10 para um número
fornecido pelo usuário.*/

echo "Informe um número para a tabuada: ";
$multiplicador = trim(fgets(STDIN));



for ($numero = 1; $numero <=10; $numero++) {
     $resultado = $multiplicador * $numero;
    echo $multiplicador . "x" . $numero . "=" . $resultado ."\n";
}