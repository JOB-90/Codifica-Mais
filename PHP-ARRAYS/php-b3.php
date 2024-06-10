<?php

/*Exercício 8: Soma dos Elementos Pares de um Array
Descrição: Desenvolva um programa que lê 5 números inteiros, armazena em um array e depois
calcula a soma dos elementos que são pares.*/

for ($i = 0; $i < 5; $i++) {
    $numeInt[] = readline("Digite o " . ($i + 1) . "º numero: ");
}

/*print_r($numeInt);*/

$soma = 0;

for ($i = 0; $i < 5; $i++) {
    if ($numeInt[$i] % 2== 0) {
        $soma += $numeInt[$i];
    }
}

echo "a soma dos numeros pares fornecidos, resulta em: $soma.";