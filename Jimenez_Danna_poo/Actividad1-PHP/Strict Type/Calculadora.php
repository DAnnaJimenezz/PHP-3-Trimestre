<?php
/* declare(strict_types=1);, que permite habilitar el "modo estricto" en el que se deben 
declarar los tipos de datos para los parámetros y valores de retorno en funciones y métodos. */

declare(strict_types=1);

class Calculadora {
    
    public function sumar(int $a, int $b): int {
        return $a + $b;
    }
}

$calculadora = new Calculadora();
$resultado = $calculadora->sumar(3, 4);
echo "El resultado es $resultado";

?>