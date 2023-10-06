<?php

$num1 = $_POST ['operador1'];

$num2 = $_POST ['operador2'];


function suma ($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

function resta ($num1, $num2){
    $resultado1 = $num1 - $num2;
    return $resultado1;
}

function multiplicacion ($num1, $num2){
    $resultado2 = $num1 * $num2;
    return $resultado2;
}

function division ($num1, $num2){
    $resultado3 = $num1 / $num2;
    return $resultado3;
}

echo '<br>' .'El primer operador  es: ' .$num1;
echo '<br>';

echo '<br>' .'El segundo operador  es: ' .$num2;
echo '<br>';

$resultado = suma ($num1, $num2);
echo '<br>' .'El resultado de la suma es: ' .$resultado;
echo '<br>';

$resultado1 = resta ($num1, $num2);
echo '<br>' .'El resultado de la resta es: ' .$resultado1;
echo '<br>';

$resultado2 = multiplicacion ($num1, $num2);
echo '<br>' .'El resultado de la multiplicacion es: ' .$resultado2;
echo '<br>';

$resultado3  = division ($num1, $num2);
echo '<br>' .'El resultado de la division es: ' .$resultado3;
