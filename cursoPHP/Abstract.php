<?php

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;


    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class NuBank extends Banco{
    
     public function Sacar($s){
        $this->saldo -= $s;
        echo "<br>Você sacou: ".$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "<br>Você depositou: ".$d;
    }
}

$nuBank = new NuBank();
$nuBank->setSaldo(1000);
echo "Saldo: ".$nuBank->getSaldo();
echo "<hr>";
$nuBank->Sacar(200);
echo "<br> Saldo: ".$nuBank->getSaldo();
echo "<hr>";
$nuBank->Depositar(1200);
echo "<br> Saldo: ".$nuBank->getSaldo();
echo "<hr>";