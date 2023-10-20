<?php

/*No puede ser instanciada por sí misma y generalmente contiene métodos abstractos,
sirve como una plantilla para otras clases que heredarán sus características.*/

abstract class Carro {  // Crea la clase producto, como clase abtracta 
    public $nombre; // Se crean atributos publicos
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    abstract public function introduccion() : string; // Se crea un metodo abtracto el cual las demas clases podran implementar, si se extiende Carro
}


/* Las clases Audi, Volvo y Citroen se heredan de la clase Carro. 
Esto significa que las clases Audi, Volvo y Citroen pueden usar 
la propiedad pública $nombre así como el método público __construct() 
de la clase Car debido a la herencia */

class Audi extends Carro {
    public function introduccion() : string {
        return "¡Elige calidad alemana! soy un $this->nombre!";
    }
}

class Volvo extends Carro {
    public function introduccion() : string {
        return "¡Orgulloso de ser sueco! soy un $this->nombre!";
    }
}

class Citroen extends Carro {
    public function introduccion() : string {
    return "¡Extravagancia francesa! soy un $this->nombre!";
}
}


//Crea objetos a partir de las clases hijas
$audi = new Audi("Audi");
echo $audi->introduccion();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->introduccion();
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->introduccion();
?>