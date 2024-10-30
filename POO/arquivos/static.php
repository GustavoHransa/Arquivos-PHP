<?php

class Contador {
    // Propriedade estática para armazenar o valor do contador
    public static $cont = 0;

    // Método estático para incrementar o contador
    public static function incrementar() {
        // Incrementa o valor da propriedade estática $cont
        self::$cont++;
        // Exibe o valor atual do contador no console
        echo "Valor atual do contador: " . self::$cont . "\n";
    }
}

Contador::incrementar(); // Chama o método estático incrementar() da classe Contador
Contador::incrementar(); // Chama o método novamente

// Outro exemplo com método estático e constante
class Util {
    // Constante estática para o valor de Pi
    const PI = 3.14159;

    // Método estático para calcular a área de um círculo
    public static function calcularAreaCirculo($raio) {
        // Calcula a área do círculo usando a fórmula A = π * r²
        return self::PI * $raio * $raio;
    }
}


echo Util::calcularAreaCirculo(5); // Chama o método estático calcularAreaCirculo() da classe Util com o raio 5