<?php
class Precio {
    public function calcularPrecio($precio, $descuento = 0.10) { // Se crea la funcion con valores por defecto $precio y $decuento
        $precioFinal = $precio - ($precio * $descuento);
        return $precioFinal;
    }
}

$precioCalculadora = new Precio();

// Llamar al método sin proporcionar el segundo parámetro
$precioFinal = $precioCalculadora->calcularPrecio(100); // $precioFinal tendrá un valor de 90 (10% de descuento)
?>