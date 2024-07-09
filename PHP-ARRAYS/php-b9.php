<?php

$valorCompra = readline("Qual o valor da compra? ");
$percentualDesconto = 0;
function aplicarDesconto ($valorCompra, $percentualDesconto) {
    $desconto = $valorCompra - (($valorCompra / 100) * $percentualDesconto);
    return $desconto;
}

if ($valorCompra < '100') {
    $percentualDesconto = 0;
    echo "Você não atingil o valor minimo para desconto, então, o valor total da sua compra é: R$". aplicarDesconto($valorCompra, $percentualDesconto) . " reais.\n";
    exit;
}

if ($valorCompra >='100' && $valorCompra <='500') {
    $percentualDesconto = 10;
}

if ($valorCompra > '500') {
    $percentualDesconto = 20;
}

echo "o valor total da sua compra com o desconto é: R$" . aplicarDesconto($valorCompra, $percentualDesconto) ." reais.\n";