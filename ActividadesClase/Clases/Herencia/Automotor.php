<?php
declare(strict_types=1);
//Crear superclase automotor
class Automotor{
    private string $marca;
    private string $modelo;
    private int $precio;
    
    public function __construct(string $marca, string $modelo, int $precio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }
    public function get_marca(){
        return $this->marca;
    }
    public function get_modelo(){
        return $this->modelo;
    }
    public function get_precio(){
        return $this->precio;
    }
    public function set_marca($marca){
        $this->marca = $marca;
    }
    public function set_modelo($modelo){
        $this->modelo = $modelo;
    }
    public function set_precio($precio){
        $this->precio = $precio;
    }
    public function saludar(){
        echo 'Bienvenido, desde la SUPERCLASE Automotor';
        echo '<br>'. 'Versión PHP: '. phpinfo();
    }
}

$automotor1 = new Automotor ('Chevrolet', 'G-26', 50000);
echo '<br>' . $automotor1 -> get_marca();
echo '<br>' . $automotor1 -> get_modelo();
echo '<br>' . $automotor1 -> get_precio();

?>