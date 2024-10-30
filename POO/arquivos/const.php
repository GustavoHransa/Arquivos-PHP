<?php

class Pessoas{
    const nome = "Agatha";  

    public function getNome(){
        echo self:nome;
    }
}

$agatha = new Pessoas();
echo $agatha :nome;
var_dump($agatha);
