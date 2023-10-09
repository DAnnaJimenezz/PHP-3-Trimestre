<?php

require_once('Automovil.php');

$mi_automovil = new Automovil ('Chevrolet', '2017', 250000, 'Camaro', 'Negro grisacio');

// Subclase invocando metodos de Superclase

echo 'Marca Automovil: ' . $mi_automovil -> get_marca() . '<br>';
echo 'Modelo Automovil: ' . $mi_automovil -> get_modelo() . '<br>';
echo 'Precio Automovil: ' . $mi_automovil -> get_precio() . '<br>';

//Subclase invocando metodos de la Subclase 

echo 'Tipo: ' . $mi_automovil -> get_tipo() . '<br>';
echo 'Color: ' . $mi_automovil -> get_color() . '<br>';
$mi_automovil -> saludar();