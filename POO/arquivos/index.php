<?php

    class Usuario {

    // Atributos = são caracteristicas que nossos objetos terão.

     public $nome;
     public $idade;
     public $email;
     public $senha;
       
    // Metodos = ações que nossos objetos poderão executar.

     public function Cadastrar (){

        if($this -> email == "teste@gmail.com" && $this -> senha =="123456"){

            echo "Cadastrado com sucesso";

        }
        else {

            echo "Erro ao cadastrar";
        }

      }

    }

    // palavra reservada "new" para criarmos um novo objeto a partir da class referida

    $gustavo = new Usuario();

    $gustavo -> nome = "Gustavo Thiago";
    $gustavo -> idade = 35;
    $gustavo -> email = "teste@gmail.com";
    $gustavo -> senha =123456;

    var_dump($gustavo);

    $gustavo -> Cadastrar();


    ?>