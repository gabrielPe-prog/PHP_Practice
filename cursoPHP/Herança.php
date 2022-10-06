<?php 

class Veiculo{
     
    public $modelo;
    public $cor;

    public function Acelerar(){
        echo "Acelerou";
    }

    public function Freiar(){
        echo "Freiou";
    }

}

class Carro extends Veiculo{
}

class Moto extends Veiculo{
}

$carro = new Carro();
$carro->modelo = "Strada";
$carro->cor = "Preta";
$carro->Acelerar();
var_dump($carro);