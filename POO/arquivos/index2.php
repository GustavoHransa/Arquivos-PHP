<?php

   class Pessoas {
      
    public $nome;
    public $idade;
    public $altura;
    public $peso;


    public function __construct($nome,$idade,$altura,$peso){

        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> altura = $altura;
        $this -> peso = $peso;
    }
    public function setNome ($n){
        $this -> nome =$n;
    }

    public function getNome (){

        return $this -> nome;
    }

    public function Andar (){

        echo $this->nome." Andou";
    }

    public function Falar (){

        echo $this->nome. " Falou";
    }

    public function Comer (){

        echo $this->nome." Comeu";
    }

    public function Dormir (){

        echo $this->nome." Dormiu";
    }

   

   }

   $pedro = new Pessoas("Pedro Lucas", 20 , 1.70 , 50 );
   


   $pedro -> dormir();
