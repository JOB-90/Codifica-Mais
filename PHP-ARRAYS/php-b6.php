<?php

$peso = readline("Qual seu peso em Kg? ");
$altura = readline("Qual sua altura em Metro: ");
$imc = $peso / ($altura * $altura);

echo "Seu IMC é de: " . $imc .  ".\n";


if($imc <= 18.5) {
    echo "Voçê esta abaixo do peso recomendado (MAGRO), sugiro procurar um Médico ou Nutricionista!\n";
}

elseif ($imc <= 24.9 ) {
    echo "Voçê esta dentro do peso recomendado, mantenha-se em forma.\n";
}

elseif ($imc <= 29.9) {
    echo "Voçê esta com sobrepeso (GORDO), sugiro procurar um Médico ou Nutricionista.\n";
}
    
elseif ($imc <= 34.9) {
    echo "Voçê esta com obesidade grau I, sugiro procurar um Médico ou Nutricionista rápido!\n"; 
}
 
elseif ($imc <= 39.9) {
    echo "Voçê esta obesidade grau II, sugiro procurar um Médico ou Nutricionista andando bém rárido!\n"; 
}

elseif ($imc >= 40) {
     echo "Voçê esta com obesidade grau III, sugiro procurar um Médico ou Nutricionista o mais rápido possível!\n";
}