<?php
abstract class FiguraGeometrica { // Se crea una clase abstracta
    abstract public function calcularArea(); // Se realiza un metodo abstracto el cual podran ser utilizado por las demas clase si exitienden FiguraGeometrica
}

class Circulo extends FiguraGeometrica { // Se crea una clase Circulo la cual extiende FiguraGeometrica
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() { // Implementa el metodo calcularArea de la super clase
        return M_PI * $this->radio * $this->radio; // M_PI es una constante de PI predefinida en PHP
    }
}

class Cuadrado extends FiguraGeometrica { // Se crea una clase Cuadrado la cual extiende FiguraGeometrica
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() { // Implementa el metodo calcularArea de la super clase
        return $this->lado * $this->lado;
    }
}

// Instancia de cada clase
$circulo = new Circulo(5);
echo "Área del círculo: " . $circulo->calcularArea() . "<br>"; // Llaman el metodo

$cuadrado = new Cuadrado(4);
echo "Área del cuadrado: " . $cuadrado->calcularArea(); // Llaman el metodo
?>