<?php
$num1 = $_POST ['operador1'];

$num2 = $_POST ['operador2'];

class Calculadora {
    private int $operador1;
    private int $operador2;

    public function __construct () {
    }

    public function set_operador1 (int $operador1){
        if(!empty($operador1) && is_numeric($operador1)){
            $this->operador1 = $operador1;
        }
        }

        public function get_operador2(){
            return $this-> operador2;
        }

        public function set_operador2 (int $operador2){
            if(!empty($operador2) && is_numeric($operador2)){
                $this->operador2 = $operador2;
        }
        }   

    public function suma (int $operador1, int $operador2){
        return $operador1 + $operador2;
    }

    public function resta (int $operador1, int $operador2){
        return $operador1 - $operador2;
    }

    public function multiplicacion (int $operador1, int $operador2){
        return $operador1 * $operador2;
    }

    public function division (int $operador1, int $operador2){
        if ($operador2 !=0) {
        return $operador1 / $operador2;
        }
        else {
            echo 'No se puede dividir por cero';
        return;
        }
    }
}
$calculo1 = new Calculadora ();
echo $calculo1 -> division($operador1, $operador2);