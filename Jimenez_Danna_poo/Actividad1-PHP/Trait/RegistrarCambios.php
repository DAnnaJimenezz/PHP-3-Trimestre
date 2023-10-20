<?php
//Los traits en PHP son una forma de reutilizar código en diferentes clases sin la necesidad de herencia.

trait RegistroCambios {
    protected $historialCambios = [];

    public function registrarCambio($cambio) {
        $this->historialCambios[] = $cambio;
    }

    public function obtenerHistorialCambios() {
        return $this->historialCambios;
    }
}

class Producto {
    use RegistroCambios;

    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

$producto = new Producto("Camiseta", 19.99);
$producto->registrarCambio("Precio actualizado a 24.99");
$producto->registrarCambio("Descripción modificada");
$cambios = $producto->obtenerHistorialCambios();
print_r($cambios);
?>