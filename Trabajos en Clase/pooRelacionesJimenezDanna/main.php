<?php

require_once ('Computador.php');
require_once('ComputadorLaptod.php');
require_once('ComputadorDesktop.php');

$mi_computador1 = new ComputadorLaptod ('Acer', '16 GB', 'DDR4', 'SSD', '512 GB', 'Windows 10', 'Microsoft Office 365', 'Intel Core i7', 4, False, 65);

echo 'Fabricante : ' . $mi_computador1 -> get_fabricante() . '<br>';
echo 'Capacidad de Memoria : ' . $mi_computador1 -> get_capMemoria() . '<br>';
echo 'Tipo de memoria  : ' . $mi_computador1 -> get_tipoMemoria() . '<br>';
echo 'Tipo de Almacenamiento : ' . $mi_computador1 -> get_tipoAlmacenamiento() . '<br>';
echo 'Capacidad de Almacenamiento : ' . $mi_computador1 -> get_capAlmacenamiento() . '<br>';
echo 'Sistema Operativo : ' . $mi_computador1 -> get_sistemaOperativo() . '<br>';
echo 'Suite de Oficina: ' . $mi_computador1 -> get_suiteOficina() . '<br>';
echo 'Procesador : ' . $mi_computador1 -> get_procesador() . '<br>';
echo 'Numero de puertos USB : ' . $mi_computador1 -> get_numPuertosUSB() . '<br>';
echo 'Procesador : ' . $mi_computador1 -> get_tactil() . '<br>';
echo 'Potencia de la bateria : ' . $mi_computador1 -> get_potBateria() . '<br>';


echo '<br>';

$mi_computador2 = new ComputadorLaptod ('Apple', '8 GB', 'LPDDR4X', 'SSD', '256 GB', 'mac OS Big Sur', 'iWork', 'Apple M1', 2, True, 58.2);

echo 'Fabricante : ' . $mi_computador1 -> get_fabricante() . '<br>';
echo 'Capacidad de Memoria : ' . $mi_computador1 -> get_capMemoria() . '<br>';
echo 'Tipo de memoria  : ' . $mi_computador1 -> get_tipoMemoria() . '<br>';
echo 'Tipo de Almacenamiento : ' . $mi_computador1 -> get_tipoAlmacenamiento() . '<br>';
echo 'Capacidad de Almacenamiento : ' . $mi_computador1 -> get_capAlmacenamiento() . '<br>';
echo 'Sistema Operativo : ' . $mi_computador1 -> get_sistemaOperativo() . '<br>';
echo 'Suite de Oficina: ' . $mi_computador1 -> get_suiteOficina() . '<br>';
echo 'Procesador : ' . $mi_computador1 -> get_procesador() . '<br>';
echo 'Numero de puertos USB : ' . $mi_computador1 -> get_numPuertosUSB() . '<br>';
echo 'Procesador : ' . $mi_computador1 -> get_tactil() . '<br>';
echo 'Potencia de la bateria : ' . $mi_computador1 -> get_potBateria() . '<br>';