<?php

class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }

}

class Carrinho{
    public $produtos;
//Nessa parte acontece a agregação da classe Produtos na classe Carrinho, 
//para que o carrinho tenha acesso aos valores de nome e valor do produto que está dentro da classe produto.
//Sendo assim, conseguindo guardar as informações dentro de um array.
    public function adicionar(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach ($this->produtos as $produto){
            echo $produto->nome;
            echo "<br>";
            echo $produto->valor;
            echo "<br>";
        }
    }
}

$produto1 = new Produtos("Escova", "2");
$produto2 = new Produtos("Pasta de Dente", "1,50");

$carrinho = new Carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);

$carrinho->exibe();