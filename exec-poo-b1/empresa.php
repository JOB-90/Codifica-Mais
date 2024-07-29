<?php

require_once 'Funcionario.php';

$felipe = new Funcionario('Felipe','montador', 1200);
//var_dump($felipe);
$felipe -> ajustarSalario(6000);
$felipe -> alterarCargo('Soldador');
$felipe -> funcionario();
//var_dump($felipe);