<?php
// Una función recursiva es una función que se llama a sí misma dentro de su propia definición.

class FactorialCalculator {
    
    public function factorial($a) { // Recibe como argumento $a
        if ($a <= 1) { // La función comprueba si $a es uno 
            return 1;
        } else {
            return $a * $this->factorial($a - 1); // Si no lo es multiplica el valor de $a por la invocación de si misma cambiando el argumento por $a-1 
        }
    }
}

// Se instancia la clase
$factorialCalculator = new FactorialCalculator();
$numero = 5; // Se crea una variable pasandole como argumento 5
$resultado = $factorialCalculator->factorial($numero); //Se crea una variable, donde en la misma es llamado el metodo
echo "El factorial de $numero es $resultado";
?>