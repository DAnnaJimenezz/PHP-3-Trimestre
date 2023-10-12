<?php

// Aplicando un ALIAS al namespace con la palabra reservada 'use'

require ('Clase2.php');

use Sena as S;

$persona1 = new Sena\Persona ('RODRIGO', 'jairo@abc', 'Buenos dias...');
echo 'Imprimiendo datos de la clase Perona en el espacio de nombres Sena' . '<br>';
echo 'Nombres: ' . $persona1->nombre . '<br>';
echo 'Correo: ' . $persona1->correo . '<br>';
echo 'Saludo: ' . S\Persona::$saludo . '<br>';