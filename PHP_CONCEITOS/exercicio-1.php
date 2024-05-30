<?php
/*Exercício 1: Somar dois números
Descrição: Escreva um programa que solicite ao usuário dois números e imprima a soma deles.*/

echo "Qual seu nome? ";
$usuario = trim(fgets(STDIN));

echo "Informe o primeiro numero para a soma " . $usuario . " : ";
$primNumero = trim(fgets(STDIN));
echo "Informe o segundo numero para a soma " . $usuario . ": ";
$segNumero = trim(fgets(STDIN));

/*$primNumero = 5;
$segNumero = 13;*/
$resultado = $primNumero + $segNumero;

echo "O resultado da soma dos numeros solicitados é, " . $resultado;