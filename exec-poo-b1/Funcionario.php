<?php

class Funcionario
{
    private $nome;
    private $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function alterarCargo($novoCargo)
    {
        if ($novoCargo != $this->cargo)
        {        
         $this->cargo = $novoCargo;        
        }
    }


    public function ajustarSalario($novoSalario)
    {
        if ($novoSalario != $this->salario)
        {        
         $this->salario = $novoSalario;        
        }
    }

    public function funcionario()
    {
        echo "Funcionario: " . $this->nome . "\n Salário: " . $this->salario . "\n Cargo: " . $this->cargo;
    }

}