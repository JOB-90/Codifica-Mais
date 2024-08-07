<?php

class Produto implements ProdutoInterface
{
public $SKU;
public $nome;
public $quantidade;
public $unidadeMedida;
public $preco;

public function __construct($SKU, $nome, $quantidade, $unidadeMedida, $preco)
{
    $this->SKU = $SKU;
    $this->nome = $nome;
    $this->quantidade = $quantidade;
    $this->unidadeMedida = $unidadeMedida;
    $this->preco = $preco;
}

public function getSku(){
   return $this->SKU;
}
public function getNome(){
   return $this->nome;
}

public function getquantidade(){
    return $this->quantidade;
 }

 public function getunidadeMedida(){
    return $this->unidadeMedida;
 }

 public function getpreco(){
    return $this->preco;
 }

}