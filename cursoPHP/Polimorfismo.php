<?php

class Animal{

    public function Andar(){
        echo "O animal andou!";
    }

    public function Correr(){
        echo "O animal andou!";
    }
}

class Cavalo extends Animal{
    
    public function Andar(){
        $this->Correr();
    }


}

$cavalo = new Cavalo();
$cavalo->Andar();