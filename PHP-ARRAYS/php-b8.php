<?php

$item[] = readline("Digite o " . ($i + 1) . "º numero: ");
while($item != -1) {
    echo"Digite -1 para terminar ou digite outro numero para continuar: ";
    $item[] = trim(fgets(STDIN));
    $i++;
}



$precItem[] = readline("Digite o preço do item: ");


$participantes[] = readline("Quantas pessoas irão participar do churrasco? ");
$totalItem = 0;

print_r($item);