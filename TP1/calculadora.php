<?php

class Calculadora{
    public function resta($n1,$n2){
        $resta = $n1 - $n2;
        return $resta;
    }
    public function suma($n1,$n2){
        $suma = $n1 + $n2;
        return $suma;
    }
    public function producto($n1,$n2){
        $producto = $n1 * $n2;
        return $producto;
    }
    public function division($n1,$n2){
        $division = $n1 / $n2;
        return $division;
    }
}

$calc = new Calculadora();
$num1 = 10;
$num2 = 5;
$res1 = $calc->suma($num1,$num2);
$res2 = $calc->resta($num1,$num2);
$res3 = $calc->producto($num1,$num2);
$res4 = $calc->division($num1,$num2);

echo "Suma: ".$res1."\n Resta:".$res2."\n Multiplicacion:".$res3."\n Division:".$res4."\n";


?>