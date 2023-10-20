<?php

// Se aplica a atributos en lugar de métodos. Debe ser implementado por las subclases.

abstract class Animal {
    // Método abstracto con un argumento-atributo
    abstract public function getEdad(); // Metodo abstracto, sera utilizable cuando se extienda la clase Animal
}

class Perro extends Animal {
    private $edad;

    public function __construct($edad) {
        $this->edad = $edad;
    }

    public function getEdad() { // Se llama el argumento abtracto getEdad de la superClase
        return $this->edad;
    }
}

// Se crean instancias de la clase
$perro = new Perro(5);
echo "Edad del perro: " . $perro->getEdad() . " años";
?>