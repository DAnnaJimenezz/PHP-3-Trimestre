<?php

require_once ('Computador.php');
require_once('ComputadorLaptod.php');
require_once('ComputadorDesktop.php');

// Se llama el metodo estatico de la superclase
echo Computador::fechaActual();
echo '<br>';

echo 'Computadoras Laptod' . '<br>';
echo '<br>';

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
echo 'Tactil : ' . $mi_computador1 -> get_tactil() . '<br>';
echo 'Potencia de la bateria : ' . $mi_computador1 -> get_potBateria() . '<br>';


echo '<br>';

$mi_computador2 = new ComputadorLaptod ('Apple', '8 GB', 'LPDDR4X', 'SSD', '256 GB', 'mac OS Big Sur', 'iWork', 'Apple M1', 2, True, 58.2);

echo 'Fabricante : ' . $mi_computador2 -> get_fabricante() . '<br>';
echo 'Capacidad de Memoria : ' . $mi_computador2 -> get_capMemoria() . '<br>';
echo 'Tipo de memoria  : ' . $mi_computador2 -> get_tipoMemoria() . '<br>';
echo 'Tipo de Almacenamiento : ' . $mi_computador2 -> get_tipoAlmacenamiento() . '<br>';
echo 'Capacidad de Almacenamiento : ' . $mi_computador2 -> get_capAlmacenamiento() . '<br>';
echo 'Sistema Operativo : ' . $mi_computador2 -> get_sistemaOperativo() . '<br>';
echo 'Suite de Oficina: ' . $mi_computador2 -> get_suiteOficina() . '<br>';
echo 'Procesador : ' . $mi_computador2 -> get_procesador() . '<br>';
echo 'Numero de puertos USB : ' . $mi_computador2 -> get_numPuertosUSB() . '<br>';
echo 'Tactil : ' . $mi_computador2 -> get_tactil() . '<br>';
echo 'Potencia de la bateria : ' . $mi_computador2 -> get_potBateria(). '<br>';

echo '<br>';
echo 'Computadoras Dektop' . '<br>';
echo '<br>';

$mi_computador3 = new ComputadorDesktop ('Dell', '32 GB', 'DDR4', 'SSD', '1 TB', 'Windows 11', 'Microsoft Office 2021', 'AMD Ryzen 9 5900X', 6, True);

echo 'Fabricante : ' . $mi_computador3 -> get_fabricante() . '<br>';
echo 'Capacidad de Memoria : ' . $mi_computador3 -> get_capMemoria() . '<br>';
echo 'Tipo de memoria  : ' . $mi_computador3 -> get_tipoMemoria() . '<br>';
echo 'Tipo de Almacenamiento : ' . $mi_computador3 -> get_tipoAlmacenamiento() . '<br>';
echo 'Capacidad de Almacenamiento : ' . $mi_computador3 -> get_capAlmacenamiento() . '<br>';
echo 'Sistema Operativo : ' . $mi_computador3 -> get_sistemaOperativo() . '<br>';
echo 'Suite de Oficina: ' . $mi_computador3 -> get_suiteOficina() . '<br>';
echo 'Procesador : ' . $mi_computador3 -> get_procesador() . '<br>';
echo 'Numero de puertos USB : ' . $mi_computador3 -> get_numPuertosUSB() . '<br>';
echo 'UPS : ' . $mi_computador3 -> get_ups() . '<br>';

echo '<br>';

$mi_computador4 = new ComputadorDesktop ('Lenovo', '16 GB', 'DDR4', 'HDD', '2 TB', '22.04 LTS', 'LibrOffice', 'Intel Core i5', 4, False);

echo 'Fabricante : ' . $mi_computador4-> get_fabricante() . '<br>';
echo 'Capacidad de Memoria : ' . $mi_computador4 -> get_capMemoria() . '<br>';
echo 'Tipo de memoria  : ' . $mi_computador4 -> get_tipoMemoria() . '<br>';
echo 'Tipo de Almacenamiento : ' . $mi_computador4 -> get_tipoAlmacenamiento() . '<br>';
echo 'Capacidad de Almacenamiento : ' . $mi_computador4 -> get_capAlmacenamiento() . '<br>';
echo 'Sistema Operativo : ' . $mi_computador4 -> get_sistemaOperativo() . '<br>';
echo 'Suite de Oficina: ' . $mi_computador4 -> get_suiteOficina() . '<br>';
echo 'Procesador : ' . $mi_computador4 -> get_procesador() . '<br>';
echo 'Numero de puertos USB : ' . $mi_computador4 -> get_numPuertosUSB() . '<br>';
echo 'UPS : ' . $mi_computador4 -> get_ups() . '<br>';

echo '<br>';

// Se llama el metodo estatico de la superclase
$mi_computador1 ->contar() . '<br>';
echo '<br>';
$mi_computador2->contar() . '<br>';
echo '<br>';
$mi_computador3->contar() . '<br>';
echo '<br>';
$mi_computador4->contar() . '<br>';