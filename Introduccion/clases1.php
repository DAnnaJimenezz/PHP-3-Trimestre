<?php

//Encapsulamiento 
class Docente {
    private string $tipo_Documento;
    private string $num_Documento;

    public function __construct($tipo_Documento, $num_Documento) {
        $this->tipo_Documento = $tipo_Documento;
        $this->num_Documento = $num_Documento;
    }

    //Metodos GET para obtener los datos de la clase
    public function get_tipo_Documento (){
        return $this -> tipo_Documento;
    }

    public function get_num_Documento (){
        return $this -> num_Documento;
    }

    //Metodos SET se usan para guardar los datos en el objeto 

    public function set_tipo_Documento ($tipo_Documento){
        $this -> tipo_Documento = $tipo_Documento;
    }

    public function set_num_Documento ($num_Documento){
        $this -> num_Documento = $num_Documento;
    }

}

// Se crea una instancia 
$docente1 = new Docente ('C.C', '53031992');
$docente2 = new Docente ('T.I', '189272282');
$docente3 = new Docente ('PASAPORTE', '7994522');
$docente4 = new Docente ('NIT', '2358456');
$docente5 = new Docente ('C.C', '100065185');


// Se crea un objeto $docente1 ese objeto invoca el metodo.
echo '<br>' . 'Tipo de documento' . $docente1 -> get_tipo_Documento();
echo '<br>' . 'Numero de documento' . $docente1 -> get_num_Documento();


echo '<br>' . 'Tipo de documento' . $docente2 -> get_tipo_Documento();
echo '<br>' . 'Numero de documento' . $docente2 -> get_num_Documento();

echo '<br>' . 'Tipo de documento' . $docente3 -> get_tipo_Documento();
echo '<br>' . 'Numero de documento' . $docente3 -> get_num_Documento();

echo '<br>' . 'Tipo de documento' . $docente4 -> get_tipo_Documento();
echo '<br>' . 'Numero de documento' . $docente4 -> get_num_Documento();

echo '<br>' . 'Tipo de documento' . $docente5 -> get_tipo_Documento();
echo '<br>' . 'Numero de documento' . $docente5 -> get_num_Documento();


// El objeto docente1 llama al metodo que asigna el tipo de documento
$docente1 -> set_tipo_Documento('T.I');
$docente2 -> set_num_Documento(89268658);
$docente3 -> set_tipo_Documento('C.C');
$docente4 -> set_num_Documento(79826855);
$docente5 -> set_tipo_Documento('PASAPORTE');