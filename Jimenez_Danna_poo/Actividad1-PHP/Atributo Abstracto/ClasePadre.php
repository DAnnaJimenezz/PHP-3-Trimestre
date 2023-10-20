<?php
abstract class ClasePadre {
    // Método abstracto con un argumento-atributo
    abstract protected function prefijoNombre($nombre); // Metodo abstracto, sera utilizable cuando se extienda la clase ClasePadre
}

class ClaseHija extends ClasePadre {

    public function prefijoNombre($nombre) { // Se llama el argumento abtracto prefijoNombre de la superClase que recibe como argumento $nombre
        if ($nombre == "Danna Jimenez") { // Verifica si el valor de $nombre es igual a "Danna Jimenez"
            $prefijo = "Señorita."; // Si se cumple esta condición, se asigna el prefijo "Señorita." a la variable $prefijo.
        } elseif ($nombre == "Daniela Perez") { // Verifica si el valor de $nombre es igual a "Daniel Perez"
            $prefijo = "Señora."; // Si se cumple esta condición, se asigna el prefijo "Señora." a la variable $prefijo.
        } else { // Si ninguna de estas se cumple
            $prefijo = ""; // Devuelve el prefijo como cadena vacia 
        }
        return "{$prefijo} {$nombre}"; //Se concatena el prefijo junto con el nombre, devuelve el resultado de la funcion
    }
}

// Se crean instancias para la clase 
$clase = new ClaseHija;
echo $clase->prefijoNombre("Danna Jimenez");
echo "<br>";
echo $clase->prefijoNombre("Daniela Perez");
?>