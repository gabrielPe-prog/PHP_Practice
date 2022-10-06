<?php

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Gabriel";
$cliente->endereco = "Avenida Paris";

$pedido = new Pedido();
$pedido->numero = "10";
$pedido->cliente = $cliente;


//Nessa parte, os valores do objeto pedido que estão sendo armazenados no array estão se associando com os valores do objeto cliente.
$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);