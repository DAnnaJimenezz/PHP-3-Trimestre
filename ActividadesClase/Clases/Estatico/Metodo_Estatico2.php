<?php
// require_once ('Metodo_Estatico.php'); //Importar una sola vez de manera obligatoria
require('Metodo_Estatico.php');  // Importacion de manera obligatoria, varias veces
// include ('Metodo_Estatico.php'); //Importacion de manera opcional 
// include_once ('Metodo_Estatico.php'); 

//Creando la instancia de Empleado
$empleado1 = new Empleado('Juan', '25-3-2000');
$empleado2 = new Empleado('Juana', '25-4-1996');
$empleado3 = new Empleado('Maritza', '20-7-1996');


//Objeto empleado invocando un método no estático clásico
$empleado1->metodoNoEstatico();

//Clase Empleado invocando a un método estático con el operador PHP ::
Empleado::metodoEstatico();

//Clase Empleado invocando y modificando su atributo estático 
Empleado::$nacionalidad = 'colombiana';
echo "Tengo nacionalidad " . Empleado::$nacionalidad.'<br>';  // :: Operador de resolucion de ambito, llama elementos y atributos estaticos
$empleado1->contar();
$empleado1->contar();
$empleado1->contar();