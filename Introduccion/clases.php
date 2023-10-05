<?php

// Una clase es una plantilla que dice como son los datos
// Un objeto es el dato propiamente

class Aprendiz {
    //Propiedades o atributos de la clase
    public string $tipo_Documento;
    public string $num_Documento;
    public string $nombre;
    public string $apellido;
    public int $edad;
    public string $correo;
    public float $peso;
    public bool $activo;

public function __construct($tipo_Documento, $num_Documento, $nombre, $apellido, $edad, $correo, $peso, $activo) {
    $this->tipo_Documento = $tipo_Documento;
    $this->num_Documento= $num_Documento;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->correo= $correo;
    $this->peso = $peso;
    $this->activo = $activo;
}
}

$aprendiz1 = new Aprendiz ('T.I', '1019988626', 'Danna', 'Jimenez', 17, 'jimenezcastrodanna6@gmail.com', 60.0, 1);

echo '<br>' . $aprendiz1->tipo_Documento;
echo '<br>' .$aprendiz1 ->num_Documento;
echo '<br>' . $aprendiz1 ->nombre;
echo '<br>' . $aprendiz1 ->apellido;
echo '<br>' .$aprendiz1 ->edad;
echo '<br>' . $aprendiz1 ->correo;
echo '<br>' .$aprendiz1 ->peso;
echo '<br>' .$aprendiz1 ->activo;