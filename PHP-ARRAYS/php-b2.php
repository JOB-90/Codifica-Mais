<?php

$conta = readline("Digite o valor da conta: ");
$gorget = readline("Digite a porcentagem da gorjeta: ");
$porce = $gorget / 100;
$valorTotal = $porce * $conta + $conta;
$valorGorg = $porce * $conta;



//var_dump($porce);

echo "O valor total deu " . $valorTotal . ", e a gorjeta deu: " . $valorGorg . "."; 