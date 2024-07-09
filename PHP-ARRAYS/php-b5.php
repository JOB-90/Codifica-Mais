<?php

$produto = readline("qualovalor do produto? ");
$porcen = readline("Escolha a porcentagem da gorjeta entre, 10, 15 e 20 porcento: ");
$gorjeta = (($produto / 100) * $porcen);

function desconto($produto,$porcen){
    $total = $produto - (($produto / 100) * $porcen);
    return $total;
}    

if ($porcen == '10'){
    $porcen = 10;

}

elseif ($porcen == '15'){
    $porcen = 15;
 
}

elseif ($porcen == '20'){
    $porcen = 20;

}

elseif ($porcen != '10' && $porcen != '15' && $porcen != '20'){
    $porcen = 0;
    echo "O total da conta é: " . desconto($produto,$porcen) . ".\n";
    echo "Muito obrigado pela preferência, volta sempre!";
    exit;
}


echo "O total da conta é: " . desconto($produto,$porcen) . " e o valor pago de gorjeta foi: " . $gorjeta . ".\n";
echo "Muito obrigado pela preferência, volta sempre!";