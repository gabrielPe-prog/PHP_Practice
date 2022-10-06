<?php

class Login{
    private $email;
    private $senha;

    public function __construct($email, $senha){
        $this->email = $email;
        $this->senha = $senha;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "Logado com Sucesso!!";
        }else{
            echo "Dados Invalidos";
        }
    }
}

$logar = new Login("teste@teste.com", "123456");
$logar->Logar();