<?php

class Produto 
{
    private $nome;
    private $preco;
    private $quantidadeEstoque;
    
    public function __construct(string $nome)
    {
    $this -> nome = $nome;
    $this -> preco = 0;
    $this -> quantidadeEstoque = 0;
    }

    public function alterarpreco(float $novoPreco)
    {
        if ($novoPreco < $this->preco){
            echo "Preço precisa ser positivo \n";
            return;
        }
        {
            $this->preco += $novoPreco;
        }
    }

    public function addestoque(float $quantidade)
    {
        if ($quantidade < $this->quantidadeEstoque){
            echo "Quantidade de estoque precisa ser positivo \n";
            return;
        }
        {
            $this->quantidadeEstoque += $quantidade;
        }
    }

    public function tirarestoque(float $quantidade)
    {
        if ($quantidade > $this->quantidadeEstoque){
            echo "Valor de retirada maior que quantidade em estoque. \n";
            return;
        }
        {
            $this->quantidadeEstoque -= $quantidade;
        }
    }


    public function exibirDetalhes()
    {
        echo $this->nome . "\n R$ ". $this->preco . " Reais.\n Quantidade em Estoque: " . $this->quantidadeEstoque . "\n";
    }


}