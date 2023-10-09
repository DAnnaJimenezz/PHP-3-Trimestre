<?php

require_once ('Computador.php');

class ComputadorDesktop extends Computador {

    private bool $ups;

    public function __construct($fabricante, $capMemoria, $tipoMemoria, $tipoAlmacenamiento, $capAlmacenamiento, 
    $sistemaOperativo, $suiteOficina, $procesador, $numPuertosUSB, $ups) {

        parent::__construct($fabricante, $capMemoria, $tipoMemoria, $tipoAlmacenamiento, $capAlmacenamiento, 
        $sistemaOperativo, $suiteOficina, $procesador, $numPuertosUSB);

        $this->ups = $ups;
    }

    //Metodos GET 

    public function get_ups (){
        return $this ->ups;
    }

    //Metodos SET 

    public function set_ups($ups){
        $this->ups = $ups;
    }
}