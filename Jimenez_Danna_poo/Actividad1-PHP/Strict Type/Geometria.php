<?php
declare(strict_types=1);

class Geometria {

    public function calcularArea(float $base, float $altura): float {
        return $base * $altura / 2.0;
    }
}

$geometria = new Geometria();
$area = $geometria->calcularArea(5, 4.5);
echo "El área es $area";
?>