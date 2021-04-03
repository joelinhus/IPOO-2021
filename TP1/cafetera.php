<?php 


class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($cm,$ca){
        $this->capacidadMaxima = $cm;
        $this->cantidadActual = $ca;
    }

    public function __toString(){
        $retorno = "\n||  Capacidad Máxima: ".$this->capacidadMaxima." \n||  Cantidad Actual: ".$this->cantidadActual."\n----------------------------------------------\n";

        return $retorno;
    }

    public function getCantidadActual(){
        return $this->cantidadActual;
    }
    public function setCantidadActual($c){
        $this->cantidadActual = $c;
    }

    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }
    public function setCapacidadMaxima($c){
        $this->capacidadMaxima = $c;
    }

    public function llenarCafetera(){
        echo "||  Cafetera llenada \n----------------------------------------------\n";
        $this->cantidadActual = $this->capacidadMaxima;
    }

    public function vaciarCafetera(){
        echo "||  Cafetera vaciada \n----------------------------------------------\n";
        $this->cantidadActual = 0;
    }

    public function servirTaza($c){
        if($c > $this->cantidadActual){
            echo "||  La cantidad de café en la cafetera no alcanzaba para la cantidad de café que nos pidio. Le servi lo que había. \n----------------------------------------------\n";
            $this->cantidadActual = 0;
        }else{
            $this->cantidadActual = $this->cantidadActual - $c;
            echo "||  Taza servida! Queda".($this->cantidadActual > 1 ? "n" : "")." $this->cantidadActual de café \n----------------------------------------------\n";
        }
    }

    public function agregarCafe($c){
        if($this->cantidadActual==$this->capacidadMaxima){
            echo "||  La cafetera ya está llena \n----------------------------------------------\n";
        }else{
            if(($this->cantidadActual + $c) > $this->capacidadMaxima){
                $this->cantidadActual = $this->capacidadMaxima;
                echo "||  La cafetera llego a su maxima capacidad antes de poder agregarle todo lo que pediste. Ahora está llena. \n----------------------------------------------\n";
            }else{
                $this->cantidadActual = $this->cantidadActual + $c;
                echo "||  Café agregado! ahora tiene ".$this->cantidadActual."\n---------------------------------------------- \n";
            }
        }
    }
}


?>