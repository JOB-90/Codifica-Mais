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


/*Exercício 10: Invertendo um Array
Descrição: Crie um programa que lê um array de 5 elementos e imprime o array em ordem inversa.*/



for ($i = 1; $i <= 5; $i++) {
    $numero[$i] = readline("Digite 5 números: ");
}

for ($i = 5; $i >0; $i--) {
    echo $numero[$i];
}


//Exercício 11

for ($i = 10; $i <= 15; $i++) {
    $numero[$i] = readline("Digite 6 números: ");
}

for ($i = 10; $i <= 15; $i++){
    $dobro[$i] = $numero[$i] *2;
    echo $dobro[$i]."\n";
}

for ($i = 10; $i <= 15; $i++){
    echo $dobro[$i]."\n";
}


// Exercício 15

for ($i = 0; $i < 7; $i++) {
    $elemen[$i] = readline("Digite 6 elementos e um número: ");
}

$numero = readline("Digite um número: ");

$achei = false;

for ($i =0; $i < 7; $i++){
    if ($numero == $elemen[$i]){
        echo "o numero digitado esta na posição " . $i . ".";
        $achei = true;

    }

}

if ($achei == false){
    echo "número não encontrado.";
}