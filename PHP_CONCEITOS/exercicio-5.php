<?php
/*Exercício 5: Par ou ímpar
Descrição: Desenvolva um programa que leia um número e informe se ele é par ou ímpar.*/

echo "Informe um número: ";
$numero = trim(fgets(STDIN));

if ($numero %2==0) {
    echo "O número informado é par. \n";
}else{
    echo "O número informado é impar. \n";
}
echo "Não é o resultado esperado? tente mais uma vez!";