<?php

require_once ('Computador.php');

class ComputadorLaptod extends Computador {

    private bool $tactil;
    private float $potBateria;

    public function __construct($fabricante, $capMemoria, $tipoMemoria, $tipoAlmacenamiento, $capAlmacenamiento, 
    $sistemaOperativo, $suiteOficina, $procesador, $numPuertosUSB, $tactil, $potBateria) {

        parent::__construct($fabricante, $capMemoria, $tipoMemoria, $tipoAlmacenamiento, $capAlmacenamiento, 
        $sistemaOperativo, $suiteOficina, $procesador, $numPuertosUSB);

        $this->tactil = $tactil;
        $this->potBateria = $potBateria;
    }

    //Metodos GET 

    public function get_tactil(){
        return $this ->tactil;
    }

    public function get_potBateria(){
        return $this ->potBateria;
    }

    //Metodos SET 

    public function set_tactil ($tactil){
        $this->tactil = $tactil;
    }

    public function set_potBateria ($potBateria){
        $this->potBateria = $potBateria;
    }

}