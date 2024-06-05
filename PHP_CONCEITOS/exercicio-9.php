<?php
/*Exercício 9: Checando Primos
Descrição: Escreva um programa que recebe um número e verifica se ele é um número primo ou
não.*/

echo "Informe um número para verificar se é primo ou não: ";
$numero = trim(fgets(STDIN));
$contador = 0;

for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $contador++;
    }
}

if ($contador == 2) {
    echo "É primo.";
}else{
    echo "Não é primo.";
}