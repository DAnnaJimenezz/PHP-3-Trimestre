<?php
// Las interfaces le permiten especificar qué métodos debe implementar una clase.
// Las interfaces se declaran con la interfacepalabra clave:
// Para implementar una interfaz, en una clase debe usar la implementspalabra clave.
interface Animal { // Se define la interface 
    public function sonidoAnimal();
}

class Gato implements Animal { // Se crea una clase donde se implementa la interface Animal
    public function sonidoAnimal() {
        echo "Meow";
    }
}

// Se instancia la clase
$animal = new Gato();
$animal->sonidoAnimal(); // Se llama el metodo, se imprimira "Meow"
?>