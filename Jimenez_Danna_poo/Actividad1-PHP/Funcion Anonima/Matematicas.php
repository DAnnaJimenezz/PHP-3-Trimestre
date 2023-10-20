<?php
class Matematicas {

    public function calcular($numero, $operacion) { //Este método toma dos argumentos: $numero y $operacion 
        $resultado = $operacion($numero); // Este método aplica la operación especificada ($operacion) al número pasado como argumento ($numero).
        return $resultado;
    }
}

// Se instancia la clase
$matematicas = new Matematicas();

$cuadrado = function ($numero) { //Se define una función anónima llamada $cuadrado. Esta función anónima toma un argumento $numero y devuelve el cuadrado de ese número
    return $numero * $numero;
};

echo $matematicas->calcular(4, $cuadrado); // Se llama el el metodo
?>