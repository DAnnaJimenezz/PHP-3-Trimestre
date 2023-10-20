<?php
class Circulo {
    public function calcularArea($radio) {
        return 3.14159 * $radio * $radio;
    }
}

$circulo = new Circulo();

// Llamar al método utilizando parámetros nombrados
$area = $circulo->calcularArea(radio: 5);

echo "El área del círculo es: $area"; // Imprimirá "El área del círculo es: 78.53975"
?>