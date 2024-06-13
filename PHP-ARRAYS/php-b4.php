<?php

$temperatura = readline("Digite a temperatura: ");
$unidMedi = readline("escolha a unidade de medida de sua preferencia: C para celcios / F para fahrenheit: ");



if ($unidMedi == 'C'){
    $resulf = ($temperatura * 9/5)+32;
    echo $resulf;
}
elseif($unidMedi == 'F'){
    $resultc = ($temperatura - 32) * 5/9;
    echo $resultc;
}

else {
    echo "algo de errado não esta certo! você digitou a letra em mauscula?";
}
