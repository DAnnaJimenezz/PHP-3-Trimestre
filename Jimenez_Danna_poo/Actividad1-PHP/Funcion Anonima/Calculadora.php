<?php
// Una función anónima es una función sin un nombre explícito.
class Calculadora {

    public $cuadrado;

    public function __construct() {
        $this->cuadrado = function ($numero) { //Se crea dentro del constructor, se realiza una funcion anonima asignada a $cuadrado
            return $numero * $numero; // Esta funcion toma como argumento un $numero y devuelve el cuadrado
        };
    }
}

//Se crea la instancia de la clase
$calculadora = new Calculadora();
$cuadrado = $calculadora->cuadrado; //Toma la funcion anonima creada
echo $cuadrado(5);
?>