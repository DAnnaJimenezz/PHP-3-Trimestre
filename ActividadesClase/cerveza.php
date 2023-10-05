<?php

class Cerveza {
    private string $marca;
    private string $ingredientes;
    private float $precio;

    // Se define el constructor 
    public function __construct($marca, $ingredientes, $precio) {
        $this->marca = $marca;
        $this->ingredientes = $ingredientes;
        $this->precio = $precio;
    }

    // Metodos GET
    public function get_marca (){
        return $this -> marca;
    }
    
    public function get_ingredientes (){
        return $this -> ingredientes;
    }

    public function get_precio (){
        return $this -> precio;
    }
    
    // Metodos SET
    public function set_marca ($marca){
        $this -> marca = $marca;
    }
    
    public function set_ingredientes ($ingredientes){
        $this -> ingredientes = $ingredientes;
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
echo '<br>'. 'La hora y fecha actuales es :' . $fecha_actual;

// Se crean Instancias

$cerveza1 = new Cerveza ('Club Colombia', 'Malta de cebada y lúpulo.', 2.500);
$cerveza2 = new Cerveza ('Poker', 'Malta, agua, levadura y lúpulo y adjuntos.', 3.000);
$cerveza3 = new Cerveza ('Aguila', 'Azúcar, masa de cacao, manteca de cacao, emulsionantes, lecitina de soja', 2.100);
$cerveza4 = new Cerveza ('Corona', 'Agua, malta de cebada, maíz, arroz y extracto de lúpulo. ', 3.500);
$cerveza5 = new Cerveza ('Heineken', 'Cebada, lúpulo y agua.', 3.000);

// Se crean objetos, esos objetos invocan el metodo.
echo '<br>' . 'Marca de la cerveza: ' . $cerveza1 -> get_marca();
echo '<br>' . 'Lugar de origen del vino: ' . $cerveza1 -> get_ingredientes();
echo '<br>' . 'Precio del vino: ' . $cerveza1 -> get_precio();

echo '<br>';

echo '<br>' . 'Marca de la cerveza: ' . $cerveza2 -> get_marca();
echo '<br>' . 'Lugar de origen del vino: ' . $cerveza2 -> get_ingredientes();
echo '<br>' . 'Precio del vino: ' . $cerveza2 -> get_precio();

echo '<br>';

echo '<br>' . 'Marca de la cerveza: ' . $cerveza3 -> get_marca();
echo '<br>' . 'Lugar de origen del vino: ' . $cerveza3 -> get_ingredientes();
echo '<br>' . 'Precio del vino: ' . $cerveza3 -> get_precio();

echo '<br>';

echo '<br>' . 'Marca de la cerveza: ' . $cerveza4 -> get_marca();
echo '<br>' . 'Lugar de origen del vino: ' . $cerveza4 -> get_ingredientes();
echo '<br>' . 'Precio del vino: ' . $cerveza4 -> get_precio();

echo '<br>';

echo '<br>' . 'Marca de la cerveza: ' . $cerveza5 -> get_marca();
echo '<br>' . 'Lugar de origen del vino: ' . $cerveza5 -> get_ingredientes();
echo '<br>' . 'Precio del vino: ' . $cerveza5 -> get_precio();