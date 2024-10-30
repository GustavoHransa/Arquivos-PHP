<?php


class Usuario{

    public $nome;
    public $email;


    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            throw new Exception('Erro com email ',1);



        } else{
            echo $email;

        }
       
    }
}

$usuario = new Usuario();

try {
    $usuario -> setEmail('gthransa@gmail.com');
} catch (Exception $e){

    echo '<script>window.alert("'.$e->getMessage().'")</script>';


}
  