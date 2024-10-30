<?php

class Animal {
    public $nome;
    public $habitat;
    public $alimentacao;

    
    public function __construct($nome,$habitat, $alimentacao) {
        $this->nome = $nome;
        $this->habitat = $habitat;
        $this->alimentacao = $alimentacao;
    }

    public function seMovimentar() {
        echo "Este animal se movimenta.\n";
    }
    public function setNome ($n){
        $this -> nome =$n;
    }

    public function getNome (){

        return $this -> nome;
    }

    public function reproduzir(){
        echo " eles se reproduzem";
    }

}

class Vertebrados extends Animal{
 

    public $colunaVertebral;
}

class Mamiferos extends Vertebrados{
 
    public function Mamar(){
        echo "Eles mamam.";
    }

}


class Ornitorrinco extends Mamiferos  {

    public function botaOvo(){

        echo " Ele bota ovo.";
        
    }
   
}

class Morcego extends Mamiferos {

    public function Voar(){
        
        echo " Ele voa.";
    }

}

class Baleia extends Mamiferos {
   
   
    public function Esguixar(){

        echo " ela esguixou.";
        
    }
}


$chimpanze = new Animal ("Pan troglodytes","Floresta","frutas");
var_dump($chimpanze);


