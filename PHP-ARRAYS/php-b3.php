<?php

$largura = readline("Digite a largura do retanangulo: ");
$altura = readline("Digite a altura do retangulo: ");
$area = $largura * $altura;
$perimetro = 2 * ($largura + $altura);

echo "A área do retangulo informado é, " . $area . ", e o perimetro é, " . $perimetro . ".";