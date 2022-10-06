<?php 
class Pessoa {
    public $idade;

//Clone pode ser usado também é uma function, e é acionado toda vez q a palavra-chave 'clone' for usada.
    public function __clone(){
        echo "HI ";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

//'$pessoa' nesse caso, está sendo usado como referencia que o '$pessoa2' está usando. 
$pessoa2 = $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;
echo "<br>";

//Nesse caso, o $pessoa3 é u clone de $pessoa, e por isso, o valor da idade de $pessoa3 é igual o de $pessoa.
$pessoa3 = clone $pessoa;
$pessoa3->idade = 35;

echo $pessoa3->idade;
echo "<br>";