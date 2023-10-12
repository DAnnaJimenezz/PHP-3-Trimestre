<?php

require ('Clase1.php');

$persona1 = new Abc\Persona ('JAIRO PERALTA', 'jairo@abc', 'Buenos dias...');
echo 'Imprimiendo datos de la clase Perona en el espacio de nombres Abc' . '<br>';
echo 'Nombres: ' . $persona1->nombre . '<br>';
echo 'Correo: ' . $persona1->correo . '<br>';
echo 'Saludo: ' . Abc\Persona::$saludo . '<br>';

echo '<br>';
require ('Clase2.php');

$persona1 = new Sena\Persona ('JAIRO PERALTA', 'jairo@abc', 'Buenos dias...');
echo 'Imprimiendo datos de la clase Perona en el espacio de nombres Sena' . '<br>';
echo 'Nombres: ' . $persona1->nombre . '<br>';
echo 'Correo: ' . $persona1->correo . '<br>';
echo 'Saludo: ' . Sena\Persona::$saludo . '<br>';