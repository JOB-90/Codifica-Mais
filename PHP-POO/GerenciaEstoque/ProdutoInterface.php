<?php

require_once 'autoload.php';

interface ProdutoInterface
{
    public function getSku();
    public function getNome();
    public function getquantidade();
    public function getunidadeMedida();
    public function getpreco();

}