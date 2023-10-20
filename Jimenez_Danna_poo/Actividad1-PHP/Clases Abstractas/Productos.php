<?php
abstract class Producto { // Crea la clase producto, como clase abtracta 
    protected $nombre; // Se crean atributos protegidos 
    protected $precio;

    public function __construct($nombre, $precio) { // La clase toma dos parametros $nombre y $precio
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    abstract public function calcularDescuento(); // Se crea un metodo abtracto el cual las demas clases podran implementar, si se extiende Producto
}

class ProductoFisico extends Producto { // Se crea una clase ProductoFisico que extiende a Producto
    private $peso;

    public function __construct($nombre, $precio, $peso) { // La clase toma tres parametros $nombre, $precio y $peso, siendo los dos primero de la clase Productos y el ultimo de la clase ProductoFisico
        parent::__construct($nombre, $precio); // Atributos de la superclase
        $this->peso = $peso;
    }

    public function calcularDescuento() { // Toma el metodo abtracto de la clase Productos, para calcular el descuento
        return $this->precio * 0.1;
    }
}

class ProductoDigital extends Producto { // Se crea una clase ProductoDigital que extiende a Producto
    private $tamaño;

    public function __construct($nombre, $precio, $tamaño) { // La clase toma tres parametros $nombre, $precio y $tamaño, siendo los dos primero de la clase Productos y el ultimo de la clase ProductoDigital
        parent::__construct($nombre, $precio); // Atributos de la superclase
        $this->tamaño = $tamaño;
    }

    public function calcularDescuento() { // Toma el metodo abtracto de la clase Productos, para calcular el descuento
        return $this->precio * 0.2;
    }
}

// Se instancian nuevos objetos para la clase ProductoFisico y ProductoDigital
$productoFisico = new ProductoFisico("Satanas", 13.200, 2.5 ); // El resultado esperado es 1.32
echo 'El descuento realizado fue: '. $productoFisico->calcularDescuento(); // Calcula y muestra el descuento para el libro físico

$productoDigital = new ProductoDigital("El principito", 15.000, 14); // El resultado esperado es 3
echo '<br>' . 'El descuento realizado fue: '.  $productoDigital->calcularDescuento(); // Calcula y muestra el descuento para el libro digital
?>