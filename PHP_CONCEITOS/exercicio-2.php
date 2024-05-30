<?php
/*Exercício 2: Calcular média de notas
Descrição: Faça um programa que leia três notas de um aluno, calcule e mostre a média aritmética
das notas.*/

echo "Informe seu nome: ";
$aluno = trim(fgets(STDIN));

echo "Informe sua primeira nota " . $aluno . " : ";
$nota1 = trim(fgets(STDIN));
echo "Informe sua segunda nota " . $aluno . " : ";
$nota2 = trim(fgets(STDIN));
echo "Informe sua terceira nota " . $aluno . " : ";
$nota3 = trim(fgets(STDIN));

/*$nota1 = 3;
$nota2 = 2;
$nota3 = 4;*/
$média = ($nota1+$nota2+$nota3)/3;

echo "a média da nota do aluno " . $aluno . " é " . $média;