<?php
class SumaRecursivaCalculator {

    public function sumaRecursiva($a) { // Recibe como argumento $a
        if ($a <= 0) { // La función comprueba si $a es cero
            return 0;
        } else {
            return $a + $this->sumaRecursiva($a - 1); // Si no lo es suma el valor de $a por la invocación de si misma cambiando el argumento por $a-1
        }
    }
}

// Se instancia la clase
$sumaRecursivaCalculator = new SumaRecursivaCalculator();
$numero = 10; // Se crea una variable pasandole como argumento 10
$resultado = $sumaRecursivaCalculator->sumaRecursiva($numero); //Se crea una variable, donde en la misma es llamado el metodo
echo "La suma de los primeros $numero números enteros positivos es $resultado";
?>