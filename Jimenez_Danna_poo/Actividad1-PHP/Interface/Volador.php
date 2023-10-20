<?php
// Este ejemplo se realiza con multiples interfaces, se crean dos Volador y Nadador
interface Volador {
    public function volar();
}

interface Nadador {
    public function nadar();
}

// Se crea una clase Pato donde se implementan las interfaces creadas
class Pato implements Volador, Nadador {
    public function volar() {
        return "El pato vuela en el cielo.";
    }

    public function nadar() {
        return "El pato nada en el agua.";
    }
}

// Crear una instancia de la clase Pato
$pato = new Pato();
echo $pato->volar() . '<br>'; // Se llama el metodo 
echo $pato->nadar(); // Se llama el metodo
?>
