<?php

   class Carro {
      
    public $marca;
    public $nome;
    public $motor;
    public $ano;


    public function __construct($marca,$nome,$motor,$ano){

        $this -> marca = $marca;
        $this -> nome = $nome;
        $this -> motor = $motor;
        $this -> ano = $ano;
    }
    public function setNome ($n){
        $this -> nome =$n;
    }

    public function getNome (){

        return $this -> nome;
    }

    public function Andar (){

        echo $this->nome." Andou bastante.";
    }

    public function quebrar (){

        echo $this->nome. " Quebrou";
    }

    public function Consertar (){

        echo $this->nome." foi Consertado";
    }

    public function Vender (){

        echo $this->nome." foi Vendida.";
    }

   

   }

   $vectra = new Carro("Chevrolet","Vectra Gls", "2.2 8v" , 1999);
   

   $vectra -> Andar();
   echo "<br>";

   $blazer = new Carro("Chevrolet","Blazer Executive", "4.3 V6" , 1998);
   

   $blazer -> Vender();
   echo "<br>";

   $omega = new Carro("Chevrolet","Omega CD ", "4.1 6Cil" , 1998);
   

   $omega -> Consertar();
   echo "<br>";
 
   //---------------------------------------------------------------------------------------------//

   class Moto {
      
    public $marca;
    public $nome;
    public $motor;
    public $ano;


    public function __construct($marca,$nome,$motor,$ano){

        $this -> marca = $marca;
        $this -> nome = $nome;
        $this -> motor = $motor;
        $this -> ano = $ano;
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

    public function quebrar (){

        echo $this->nome. " Quebrou";
    }

    public function Consertar (){

        echo $this->nome." Consertou";
    }

    public function Vender (){

        echo $this->nome." foi Vendida";
    }


   }

   $xt660= new Moto(" Yamaha","Xt660", "660cc" , 2015);
   


   $xt660 -> Vender();
