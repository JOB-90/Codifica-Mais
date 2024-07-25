<?php

require_once 'Produto.php';

$camisa = new Produto('Camisa');

$camisa -> alterarpreco(15);

$camisa -> addestoque(40);

$camisa -> tirarestoque(41);

echo $camisa->exibirDetalhes();


$bermuda = new Produto('Bermuda');

$bermuda -> alterarpreco(45);

$bermuda -> addestoque(70);

$bermuda -> tirarestoque(13);

echo $bermuda->exibirDetalhes();


$bone = new Produto('Boné');

$bone -> alterarpreco(90.75);

$bone -> addestoque(37);

$bone -> tirarestoque(8);

echo $bone->exibirDetalhes();
