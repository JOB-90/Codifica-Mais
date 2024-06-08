<?php
/*Exercício 6: Encontrar o menor valor em um array
Descrição: Escreva um programa que leia 10 números inteiros e mostre o menor valor.*/

for( $i = 0; $i < 10; $i++ ){
    echo "Digite o " . ($i + 1) . "º numero: ";
    $numero[] = trim(fgets(STDIN));
}

/*print_r($numero);*/

$menorNum = $numero [0];

for ($i = 1; $i < 10; $i++){
    if($numero[$i] < $menorNum){
        $menorNum = $numero [$i];
    }
}

echo "O menor número é: $menorNum";