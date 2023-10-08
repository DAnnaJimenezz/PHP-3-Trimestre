<!-- <?php
// $num1 = $_POST ['operador1'];

// $num2 = $_POST ['operador2'];

// $operaciones = $_POST['operaciones']; 


// function suma ($num1, $num2){
//     $resultado = $num1 + $num2;
//     return $resultado;
// }

// function resta ($num1, $num2){
//     $resultado1 = $num1 - $num2;
//     return $resultado1;
// }

// function multiplicacion ($num1, $num2){
//     $resultado2 = $num1 * $num2;
//     return $resultado2;
// }

// function division ($num1, $num2){
//     $resultado3 = $num1 / $num2;
//     return $resultado3;
// }

// echo '<br>' .'El primer operador  es: ' .$num1;
// echo '<br>';

// echo '<br>' .'El segundo operador  es: ' .$num2;
// echo '<br>';

// $resultado = suma ($num1, $num2);
// echo '<br>' .'El resultado de la suma es: ' .$resultado;
// echo '<br>';

// $resultado1 = resta ($num1, $num2);
// echo '<br>' .'El resultado de la resta es: ' .$resultado1;
// echo '<br>';

// $resultado2 = multiplicacion ($num1, $num2);
// echo '<br>' .'El resultado de la multiplicacion es: ' .$resultado2;
// echo '<br>';

// $resultado3  = division ($num1, $num2);
// echo '<br>' .'El resultado de la division es: ' .$resultado3;

// ?> 

<?php

$num1 = $_POST ['operador1'];

$num2 = $_POST ['operador2'];

$operaciones = $_POST['operaciones'];

class Calculadora {
    private int $operador1;
    private int $operador2;

    public function __construct () {
    }

    
    public function get_operador1(){
        return $this->operador1;
    }

    public function set_operador1 (int $operador1){
        if(!empty($operador1) && is_numeric($operador1)){
            $this->operador1 = $num1;
        }
        }

        public function get_operador2(){
            return $this-> operador2;
        }

        public function set_operador2 (int $operador2){
            if(!empty($operador2) && is_numeric($operador2)){
                $this->operador2 = $num2;
        }
        }   

    public function sumar (int $operador1, int $operador2){
        return $operador1 + $operador2;
    }

    public function restar (int $operador1, int $operador2){
        return $operador1 - $operador2;
    }

    public function multiplicar (int $operador1, int $operador2){
        return $operador1 * $operador2;
    }

    public function dividir (int $operador1, int $operador2){
        if ($operador2 !=0) {
            return $operador1 / $operador2;
        }
        else {
            echo 'No se puede dividir por cero';
        return;
        }
}
}

$calculos1 = new Calculadora ($num1, $num2);

if ($operaciones === 'sumar') {
    echo 'La suma entre los dos operadores es : ' . $calculos1->sumar($num1,$num2) . '<br>';
}
elseif ($operaciones === 'restar') {
    echo 'La resta entre los dos operadores es: ' . $calculos1->restar($num1,$num2) . '<br>';
}
elseif ($operaciones === 'multiplicar') {
    echo 'La multiplicacion entre los dos operadores es : ' . $calculos1->multiplicar($num1,$num2) . '<br>';
}
elseif ($operaciones === 'dividir') {
    echo 'La division entre los dos operadores es: ' . $calculos->dividir($num1,$num2) . '<br>';
}