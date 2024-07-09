<?php

$item = ['carne','linguiça','suco','asinha','queijo'];

$preco = [40, 50, 10, 15, 30];

$participantes = readline("Quantas pessoas irão participar do churrasco? ");

$totalItem = 0;

function soma ($preco,$participantes){
    $result = 0;
    for ($i = 0; $i < count($preco); $i++){
        $result += $preco[$i];
    }
    return $result / $participantes;
}

echo "Este é o valor que cada um deve pagar: R$ " . soma ($preco,$participantes) . ". estou esperando o PIX. \n";