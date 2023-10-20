<?php

declare(strict_types=1);

class Aprendices {
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $numDocumento;
    private $tipoDocumento;

    public function __construct($nombre, $apellido, $telefono, $correo, $numDocumento, $tipoDocumento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->numDocumento = $numDocumento;
        $this->tipoDocumento = $tipoDocumento;
    }

    // Metodos GET
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getnumDocumento(){
        return $this->numDocumento;
    }

    public function gettipoDocumento(){
        return $this->tipoDocumento;
    }
}

class Fichas {
    private $numFicha;
    private $aprendices = [];

    public function __construct($numFicha) {
        $this->numFicha = $numFicha;
    }

    //Metodos GET
    public function getNumFicha(){
        return $this->numFicha;
    }

    public function getAprendices(){
        return $this->aprendices;
    }

    public function agregarAprendices (Aprendices $aprendiz){
        $this->aprendices [] = $aprendiz;
    }
}

// Se crean instancias para apredices 
$aprendiz1 = new Aprendices ('Danna', 'Jimenez', '3042527841', 'jimenezcastrodanna6@gmail.com', '1019988626', 'Tarjeta de identidad');
$aprendiz2 = new Aprendices ('Cristian', 'León', '3007722066','leoncristian@gmail.com', '104547262', 'Cedula');

// Se crea instancia para las fichas 
$ficha1 = new Fichas ('2693630');
$ficha1->agregarAprendices($aprendiz1);
$ficha1->agregarAprendices($aprendiz2);

// Se obtiene la lista de los aprendices de la ficha1
$aprendicesFicha1 = $ficha1->getAprendices();
echo 'Ficha: ' . $ficha1->getNumFicha();
echo '<br>';
echo 'Aprendices que estan dentro de la ficha: ';
echo '<br>';

//Se imprime los aprendices de la ficha 1
foreach ($aprendicesFicha1 as $aprendiz){
    echo 'Nombre: '. $aprendiz->getNombre() . '<br>', 
    'Apellido: '. $aprendiz->getApellido() . '<br>', 
    'Telefono: '. $aprendiz->getTelefono() . '<br>', 
    'Correo electronico: ' . $aprendiz->getCorreo() . '<br>',
    'Numero de documento: ' . $aprendiz->getnumDocumento(). '<br>', 
    'Tipo de Documento: ' . $aprendiz->gettipoDocumento() . '<br>';
    echo '<br>';
}


// Se crean instancias para apredices 
$aprendiz3 = new Aprendices ('Pedro', 'Gomez', '3125625184', 'pedro23@gmail.com', '1055258836', 'Tarjeta de identidad');
$aprendiz4 = new Aprendices ('Laura', 'Lopez', '3502614357','lauraLopez@gmail.com', '538165826', 'Tarjeta de identidad');

// Se crea instancia para las fichas 
$ficha2 = new Fichas ('2693629');
$ficha2->agregarAprendices($aprendiz3);
$ficha2->agregarAprendices($aprendiz4);

// Se obtiene la lista de los aprendices de la ficha1
$aprendicesFicha2 = $ficha2->getAprendices();
echo 'Ficha: ' . $ficha2->getNumFicha();
echo '<br>';
echo 'Aprendices que estan dentro de la ficha: ';
echo '<br>';

//Se imprime los aprendices de la ficha 1
foreach ($aprendicesFicha2 as $aprendiz){
    echo 'Nombre: '. $aprendiz->getNombre() . '<br>', 
    'Apellido: '. $aprendiz->getApellido() . '<br>', 
    'Telefono: '. $aprendiz->getTelefono() . '<br>', 
    'Correo electronico: ' . $aprendiz->getCorreo() . '<br>',
    'Numero de documento: ' . $aprendiz->getnumDocumento(). '<br>', 
    'Tipo de Documento: ' . $aprendiz->gettipoDocumento() . '<br>';
    echo '<br>';
}