<?php
/*Exercício 3: Verificar maioridade
Descrição: Crie um programa que pergunte a idade do usuário e diga se ele é maior de idade (18
anos ou mais) ou não.*/

echo "Informe  seu nome: ";
$nome = trim(fgets(STDIN));

echo "Informe  sua idade: " ;
$idade = trim(fgets(STDIN));

if ($idade < 18){
    echo "$nome, infeizmente você ainda não atingil a maior idade.";
}else {
    echo "$nome, meus parabéns, você atingil a maior idade.";
}