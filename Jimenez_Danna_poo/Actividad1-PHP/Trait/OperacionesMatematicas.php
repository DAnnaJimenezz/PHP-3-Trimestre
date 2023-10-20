<?php
trait OperacionesMatematicas {
    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }
}

class Calculadora {
    use OperacionesMatematicas;
}

$calculadora = new Calculadora();
$resultadoSuma = $calculadora->sumar(5, 3);
$resultadoResta = $calculadora->restar(10, 4);
$resultadoMultiplicacion = $calculadora->multiplicar(6, 7);
echo "Suma: $resultadoSuma, Resta: $resultadoResta, Multiplicación: $resultadoMultiplicacion";
?>