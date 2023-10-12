<?php

trait mensaje1 {

public function imprimirMensaje() {
    echo "Usando trait";
  }
  
}

class Bienvenida {
  use mensaje1;
}

$obj = new Bienvenida();
$obj->imprimirMensaje();

?>