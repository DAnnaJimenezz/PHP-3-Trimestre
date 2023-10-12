<?php

// Las interfaces le permiten especificar qué métodos debe implementar una clase.
// Las interfaces se declaran con la interfacepalabra clave:
// Para implementar una interfaz, en una clase debe usar la implementspalabra clave.


interface Animal {
  public function sonidoAnimal();
}

class Gato implements Animal {
  public function sonidoAnimal() {
    echo "Meow";
  }
}

$animal = new Gato();
$animal->sonidoAnimal();
?>