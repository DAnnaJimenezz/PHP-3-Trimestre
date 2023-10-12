<?php

// Una clase abstracta esta hecha para ser heredada por otras. NO se puede instanciar
// Las clases abstractas se usaran para estandarizar las aplicaciones
// Una clase abstracta servira de herencia a otras
// Las figuras pueden ser cuadrados, triangulos, rectangualos...

abstract class Figura {
    private $nLados;
    private $nombre;

    public function __construct($nLados, $nombre) {
        $this->nLados = $nLados;
        $this->nombre = $nombre;
    }

    
    public function set_nLados($nLados){
        $this->nLados=$nLados;
    }

    public function set_nombre($nombre){
        $this->nombre=$nombre;
    }

    public function get_nLados(){
        return $this->nLados;
    }

    public function get_nombre(){
        return $this->nobre;
    }
    public function imprimir (){
        echo 'Soy un metodo de una clase abstracta';
    }
}

// // Instancia 
// $cuadrado1 = new Cuadrado();
// $cuadrado1 -> imprimir();

// // Instancia 
// $triangulo = new Figura();
// $triangulo -> imprimir();

class Cuadrado extends Figura {

}

class Triangulo extends Figura {

    private float $base;
    private  float $altura;

    function __construct($nLados, $nombre, $base, $altura) {
        
        parent::__construct($nLados, $nombre);

        $this->base = $base;
        $this->altura = $altura;
    }

    public function set_base($base){
        $this->base=$base;
    }

    public function set_altura($altura){
        $this->altura=$altura;
    }

    public function get_base(){
        return $this->base;
    }
    
    public function get_altura(){
        return $this->altura;
    }

    public function areaTriangulo(){
        return ($this->base * $this->altura)/2;
    }
}

$triangulo1 = new Triangulo (3, 'Triangulo 1', 40.5, 20.2); 
echo 'El area del triangulo es: ' . $triangulo1->areaTriangulo();


class Circulo extends Figura{
    private $longRadio;
}