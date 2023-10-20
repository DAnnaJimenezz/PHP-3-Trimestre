<?php
class ConversorMoneda {
    public function dolaresAEuros($dolares) {
        $euros = $dolares * 0.85;
        return $euros;
    }
}

// Instancia la clase 
$conversor = new ConversorMoneda();

// Crea una variable 
$dolares = 50;
$euros = $conversor->dolaresAEuros($dolares); // Utiliza el metodo dolaresAEuros
echo "$dolares dólares son €$euros euros.";
?>