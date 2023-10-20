<?php
class Usuario { 
    private $nombre;
    private $apellido;
    private $telefono;
    private $email;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this; // Devuelve el propio objeto para el encadenamiento
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
        return $this; // Devuelve el propio objeto para el encadenamiento
    }
    public function setTelefono($telefono) {
        $this->telefono= $telefono;
        return $this; // Devuelve el propio objeto para el encadenamiento
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this; // Devuelve el propio objeto para el encadenamiento
    }

    public function guardar() {
        // Salida o ejecucion del ejercicio, encadena el nombre, apellido, telefono y el correo
        echo "Usuario guardado: {$this->nombre}, {$this->apellido}, {$this->telefono}, {$this->email}";
    }
}

//Se instancia la clase, con los metodos encadenados
$usuario = new Usuario();
$usuario->setNombre("Danna")->setApellido("Jimenez")->setTelefono("3042527841")->setEmail("jimenezcastrodanna6@gmail.com")->guardar();