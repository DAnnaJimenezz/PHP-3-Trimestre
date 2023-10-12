<?php

$multiplo = function($num)
{
    if ($num % 5 == 0){
        echo 'Este numero es multiplo de 5';
    }

    else {
        echo 'No es multiplo de 5';
    }
};

$multiplo (10);

?>