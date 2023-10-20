<?php
/* El encadenamiento de métodos es una técnica de programación que implica 
llamar a múltiples métodos en un objeto en una sola línea de código*/

class ManipuladorCadenas {
    private $str;

    public function __construct($str) {
        $this->str = $str;
    }

    public function mayusculas() { //Este metodo convierte en mayusculas la cadena de texto
        $this->str = strtoupper($this->str); // Dentro del método, se utiliza la función strtoupper para convertir la cadena de texto almacenada en la propiedad $str a mayúsculas.
        return $this; // Devuelve el propio objeto para el encadenamiento
    }

    public function inversa() { //Este metodo invierte la cadena
        $this->str = strrev($this->str); //Dentro del método, se utiliza la función strrev para invertir la cadena de texto almacenada en la propiedad $str.
        return $this; // Devuelve el propio objeto para el encadenamiento
    }

    public function getResultado() { //Este metodo devuelve el str
        return $this->str; // Devuelve el propio objeto para el encadenamiento
    }
}

$texto = "Hola, mundo!"; //Se define una variable junto con la cadena 
$resultado = (new ManipuladorCadenas($texto))->mayusculas()->inversa()->getResultado(); //Se instancia la clase y se encadenan los metodos 
echo $resultado; //Imprime el resultado o cadena de texto "¡ODNUM ,ALOH"
?>