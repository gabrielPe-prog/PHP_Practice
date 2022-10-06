<?php

class Email{
   
    public function addEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             //criando a excption
            throw new Exception("Email é invalido", 444);
        }else{
            echo "Email cadastrado!";
        }
    }
}

$newsletter = new Email();

//validando a exception
try{
    $newsletter->addEmail("ok@adsco");
}catch(Exception $e){
    echo "Mensagem: ".$e->getMessage()."<br>";
    echo "Mensagem: ".$e->getCode()."<br>";
    echo "Mensagem: ".$e->getLine()."<br>";
    echo "Mensagem: ".$e->getFile()."<br>";
}
