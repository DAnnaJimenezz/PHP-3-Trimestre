<?php

class Vino {
    private string $nombre;
    private string $lugar_origen;
    private float $precio;

    // Se define el constructor 
    public function __construct($nombre, $lugar_origen, $precio) {
        $this->nombre = $nombre;
        $this->lugar_origen = $lugar_origen;
        $this->precio = $precio;
    }

    // Metodos GET
    public function get_nombre (){
        return $this -> nombre;
    }
    
    public function get_lugar_origen (){
        return $this -> lugar_origen;
    }

    public function get_precio (){
        return $this -> precio;
    }
    
    // Metodos SET
    public function set_nombre ($nombre){
        $this -> nombre = $nombre;
    }
    
    public function set_lugar_origen ($lugar_origen){
        $this -> lugar_origen = $lugar_origen;
    }

    public function set_precio ($precio){
        $this -> precio = $precio;
    }

}

// Funcion que devuelve horaa y fecha actuales
function devolver_fecha(){
    $fecha_actual  = date('Y-m-d H:i:s');
    return $fecha_actual;
}

$fecha_actual = devolver_fecha();
echo 'La hora y fecha actuales es :' . $fecha_actual;

// Se crean Instancias
$vino1 = new Vino ('Cabernet', 'Francia', 59.455);
$vino2 = new Vino ('Merlot', 'Francia', 896.000);
$vino3 = new Vino ('Chardonnay', 'Region Francesa de Bordoña', 721.000);
$vino4 = new Vino ('Pinot Noir', 'Region Francesa de Bordoña', 655.000);
$vino5 = new Vino ('Malbec', 'Francia', 721.000);

// Se crean objetos, esos objetos invocan el metodo.

echo '<br>' . 'Nombre del  vino: ' . $vino1 -> get_nombre();
echo '<br>' . 'Lugar de origen del vino: ' . $vino1 -> get_lugar_origen();
echo '<br>' . 'Precio del vino: ' . $vino1 -> get_precio();

echo '<br>';

echo '<br>' . 'Nombre del  vino: ' . $vino2 -> get_nombre();
echo '<br>' . 'Lugar de origen del vino: ' . $vino2 -> get_lugar_origen();
echo '<br>' . 'Precio del vino: ' . $vino2 -> get_precio();

echo '<br>';

echo '<br>' . 'Nombre del  vino: ' . $vino3 -> get_nombre();
echo '<br>' . 'Lugar de origen del vino: ' . $vino3 -> get_lugar_origen();
echo '<br>' . 'Precio del vino: ' . $vino3 -> get_precio();

echo '<br>';

echo '<br>' . 'Nombre del  vino: ' . $vino4 -> get_nombre();
echo '<br>' . 'Lugar de origen del vino: ' . $vino4 -> get_lugar_origen();
echo '<br>' . 'Precio del vino: ' . $vino4 -> get_precio();

echo '<br>';

echo '<br>' . 'Nombre del  vino: ' . $vino5 -> get_nombre();
echo '<br>' . 'Lugar de origen del vino: ' . $vino5 -> get_lugar_origen();
echo '<br>' . 'Precio del vino: ' . $vino5 -> get_precio();