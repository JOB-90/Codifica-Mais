<?php
class Conta
{
    private $numeroConta;
    private $nomeTitular;
    private $saldo;

    public function __construct(string $numeroConta, string $nomeTitular) {
        $this -> numeroConta = $numeroConta;
        $this -> nomeTitular = $nomeTitular;
        $this -> saldo = 0;
    }
    
    public function depositar (float $valorDeposito)
    {
        if ($valorDeposito < 0){
            echo "Valor precisa ser maior que zero \n";
            return;
        }
        {
        $this -> saldo += $valorDeposito;
        }
    }

    public function sacar (float $valorsaque)
    {
        if ($valorsaque > $this->saldo){
        echo "saldo insuficiente \n";
        return;
        }
        {
            $this->saldo-=$valorsaque;
        }
        
    }

    public function defineNumeroConta(string $numero)
    {
        $this -> numeroConta = $numero; 
    }
    public function mostrarNumeroConta():string
    {
        return $this->numeroConta;
    }

    public function defineNomeTitular(string $nome)
    {
        $this -> nomeTitular = $nome; 
    }
    
    public function mostrarNomeTitular():string
    {
        return $this->nomeTitular;
    }
    
    public function mostrarSaldo():float
    {
        return $this->saldo;
    }

}