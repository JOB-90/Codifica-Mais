<?php
/* Exercício 10: Escreva um código PHP que solicita ao usuário dois números inteiros, a e b,
e calcula a soma de todos os números ímpares no intervalo [a, b] (inclusive).
Certifique-se de que a seja menor ou igual a b. Se a for maior que b, solicite
ao usuário que insira novamente os valores.*/

echo "Informe o primeiro número: ";
$numero1 = trim(fgets(STDIN));
echo "Informe o segundo número: ";
$numero2 = trim(fgets(STDIN));

$soma = 0;

while ($numero1 > $numero2) {
    echo "digite um numero maior que $numero1: ";
    $numero2 = trim(fgets(STDIN));
}
    
for($i= $numero1; $i <= $numero2 ; $i++) {
    if($i%2=== 1){
    $soma += $i;
    $soma;
    }
}

echo $soma;