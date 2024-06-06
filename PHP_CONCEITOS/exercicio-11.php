<?php

/*exercício 11:
Escreva um script PHP que solicita ao usuário uma série de números inteiros
até que ele digite um valor específico (por exemplo, -1) para parar a entrada.
O script deve então determinar e exibir o maior e o menor número digitado
pelo usuário.*/

echo "Informe um numero: ";
$entrada = trim(fgets(STDIN));

$menorNumero = $entrada;
$maiorNumero = $entrada;

while($entrada != -1) {
    echo"Digite -1 para terminar ou digite outro numero para continuar: ";
    $entrada = trim(fgets(STDIN));
    if($entrada > $maiorNumero) {
        $maiorNumero = $entrada;
    }

    if($entrada < $menorNumero && $entrada != -1) {
        $menorNumero = $entrada;
    }
}
echo"O menor número foi: $menorNumero \n";
echo"O maior número foi: $maiorNumero \n";