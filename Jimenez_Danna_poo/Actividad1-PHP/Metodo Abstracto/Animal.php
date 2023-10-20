<?php

/*Es un método en una clase abstracta que no tiene una implementación 
concreta en la clase que lo declara. Las subclases deben proporcionar 
una implementación concreta para este método.*/

abstract class Animal { // Se crea una clase abstract
    abstract public function hacerSonido(); // Se realiza un metodo abstracto el cual podran ser utilizado por las demas clase si exitienden Animal
}

class Perro extends Animal { // Se crea una clase Circulo la cual extiende Animal
    public function hacerSonido() { // Implementa el metodo hacerSonido de la super clase
        return "¡Guau!"; 
    }
}

class Gato extends Animal { // Se crea una clase Circulo la cual extiende Animal
    public function hacerSonido() { // Implementa el metodo hacerSonido de la super clase
        return "¡Miau!";
    }
}

// Instancian las clases
$perro = new Perro();
$gato = new Gato();

// Llaman cada uno el metodo
echo "El perro hace: " . $perro->hacerSonido() . "<br>";
echo "El gato hace: " . $gato->hacerSonido();
?>