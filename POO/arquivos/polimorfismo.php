<?php
class Animal {
    // Método que representa o som de um animal de forma genérica.
    public function fazerSom() {
        echo "Fazendo um som genérico.\n";
    }
}

class Cachorro extends Animal {
    // Sobrescreve o método fazerSom() da classe pai para representar o som específico de um cachorro.
    public function fazerSom() {
        echo "Au au!\n";
    }
}

class Gato extends Animal {
    // Sobrescreve o método fazerSom() da classe pai para representar o som específico de um gato.
    public function fazerSom() {
        echo "Miau!\n";
    }
}

// Cria uma nova instância da classe Cachorro.
$cachorro = new Cachorro();
// Cria uma nova instância da classe Gato.
$gato = new Gato();

// Chama o método fazerSom() do objeto $cachorro, que agora exibirá "Au au!".
$cachorro->fazerSom(); 
// Chama o método fazerSom() do objeto $gato, que agora exibirá "Miau!".
$gato->fazerSom();