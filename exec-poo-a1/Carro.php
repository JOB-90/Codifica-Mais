<?php

class Carro{
    private $marca;
    private $modelo;
    private $anoFabricacao;

    public function __construct(string $marca, string $modelo, int $anoFabricacao){
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> anoFabricacao = $anoFabricacao;
    }

    public function ligar (){
        return "O carro de modelo " . $this -> modelo . " e ano " . $this->anoFabricacao . " da marca " . $this -> marca . " esta ligado.\n";
    }
    
    public function parar (){
        return "O carro de modelo " . $this -> modelo . " e ano " . $this->anoFabricacao . " da marca " . $this -> marca . " esta parado. \n";
    }

}


$mac1 = new Carro('VW', 'Taos', 2024);

echo $mac1->ligar() . "\n";
echo $mac1->parar() . "\n";