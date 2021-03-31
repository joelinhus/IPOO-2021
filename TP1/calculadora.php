<?php

class Calculadora{
    private $n1;
    private $n2;
    
    public function __construct($num1,$num2){
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function resta(){
        $resta = $this->n1 - $this->n2;
        return $resta;
    }
    public function suma(){
        $suma = $this->n1 + $this->n2;
        return $suma;
    }
    public function producto(){
        $producto = $this->n1 * $this->n2;
        return $producto;
    }
    public function division(){
        $division = $this->n1 / $this->n2;
        return $division;
    }

    public function __toString(){
        
    }
}

$calc = new Calculadora(10,5);
$res1 = $calc->suma();
$res2 = $calc->resta();
$res3 = $calc->producto();
$res4 = $calc->division();

echo " Suma: ".$res1."\n Resta: ".$res2."\n Multiplicacion: ".$res3."\n Division: ".$res4."\n";


?>