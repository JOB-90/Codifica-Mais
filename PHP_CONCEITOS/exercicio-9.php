<?php
/*Exercício 9: Checando Primos
Descrição: Escreva um programa que recebe um número e verifica se ele é um número primo ou
não.*/


$numero = 5;
$contador = 0;

for ($i = 0; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $contador++;
    }
}

if ($contador == 2) {
    echo "É primo.";
}else{
    echo "Não é primo.";
}