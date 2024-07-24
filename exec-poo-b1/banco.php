<?php

require_once 'conta.php';

$primeiraconta = new Conta('39830207', 'a9bfki');

$primeiraconta -> depositar(1000);

$primeiraconta -> sacar(600);

echo $primeiraconta->mostrarSaldo() . "\n";

//var_dump($primeiraconta);


/*$segundaConta = new Conta ('9975090', 'jkhzjh');

$segundaConta -> depositar(15500);

$segundaConta -> sacar(20000);

var_dump($segundaConta);*/