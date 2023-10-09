<?php

class Computador {

    private string $fabricante;
    private string $capMemoria;
    private string $tipoMemoria;
    private string $tipoAlmacenamiento;
    private string $capAlmacenamiento;
    private string $sistemaOperativo;
    private string $suiteOficina;
    private string $procesador;
    private int $numPuertosUSB;
    public static $devolverFechaActual;
    public static $contador = 0;


    public function __construct($fabricante, $capMemoria, $tipoMemoria, $tipoAlmacenamiento, $capAlmacenamiento, 
    $sistemaOperativo, $suiteOficina, $procesador, $numPuertosUSB) {
        
        $this->fabricante = $fabricante;
        $this->capMemoria = $capMemoria;
        $this->tipoMemoria = $tipoMemoria;
        $this->tipoAlmacenamiento = $tipoAlmacenamiento;
        $this->capAlmacenamiento = $capAlmacenamiento;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->suiteOficina = $suiteOficina;
        $this->procesador = $procesador;
        $this->numPuertosUSB = $numPuertosUSB;
    }

    //Metodos GET

    public function get_fabricante(){
        return $this -> $fabricante;
    }

    public function get_capMemoria(){
        return $this -> $capMemoria;
    }

    public function get_tipoMemoria(){
        return $this -> $tipoMemoria;
    }
    
    public function get_tipoAlmacenamiento(){
        return $this -> $tipoAlmacenamiento;
    }

        
    public function get_capAlmacenamiento(){
        return $this -> $capAlmacenamiento;
    }

    public function get_sistemaOperativo(){
        return $this -> $sistemaOperativo;
    }

    public function get_suiteOficina(){
        return $this -> $suiteOficina;
    }

    public function get_procesador(){
        return $this -> $procesador;
    }

    public function get_numPuertosUSB(){
        return $this -> $numPuertosUSB;
    }

    //Metodos SET

    public function set_fabricante ($fabricante){
        $this->fabricante = $fabricante;
    }
    
    public function set_capMemoria ($capMemoria){
        $this->capMemoria = $capMemoria;
    }

    public function set_tipoMemoria ($tipoMemoria){
        $this->tipoMemoria = $tipoMemoria;
    }

    public function set_tipoAlmacenamiento ($tipoAlmacenamiento){
        $this->tipoAlmacenamiento = $tipoAlmacenamiento;
    }

    public function set_capAlmacenamiento ($capAlmacenamiento){
        $this->capAlmacenamiento = $capAlmacenamiento;
    }

    public function set_sistemaOperativo ($sistemaOperativo){
        $this->sistemaOperativo = $sistemaOperativo;
    }

    public function set_suiteOficina ($suiteOficina){
        $this->suiteOficina = $suiteOficina;
    }

    public function set_procesador ($procesador){
        $this->procesador = $procesador;
    }

    public function set_numPuertosUSB ($numPuertosUSB){
        $this->numPuertosUSB = $numPuertosUSB;
    }

    // Funcion estatica que devuelve la hora y fecha actuales

    public function fechaActual (){
        $devolverFechaActual  = date('Y-m-d H:i:s');
        return $devolverFechaActual;
        
        $devolverFechaActual = fechaActual();
        echo '<br>'. 'La hora y fecha actuales son :' . $devolverFechaActual;
    }

    // Funcion estatica para contar los objetos creados

    public function contar(){
        echo "Conteo: " . self::$contador+=1;
        return;
    }
}