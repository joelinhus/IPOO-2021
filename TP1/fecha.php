<?php
class Fecha{
    private $dia;
    private $mes;
    private $anio;
    private $cant_dias;

    public function getMes(){
        return $this->mes;
    }

    public function __construct($d,$m,$a){
        $this->dia = $d;
        $this->mes = $m;
        $this->anio = $a;

        switch($m){
            case 1:
                $r = 31;
                break;
            case 2:
                if(($a%4 == 0 && $a%100 !== 0)||$a%400 == 0){
                    $r = 29;
                }else{
                    $r = 28;
                }
                break;
            case 3:
                $r = 31;
                break;
            case 4:
                $r = 30;
                break;
            case 5:
                $r = 31;
                break;
            case 6:
                $r = 30;
                break;
            case 7:
                $r = 31;
                break;
            case 8:
                $r = 31;
                break;
            case 9:
                $r = 30;
                break;
            case 10:
                $r = 31;
                break;
            case 11:
                $r = 30;
                break;
            case 12:
                $r = 31;
                break;
        }

        $this->cant_dias = $r;
    }

    public function cantDiasMes($m){
        $r = 0;
        switch($m){
            case 1:
                $r = 31;
                break;
            case 2:
                if(($this->anio%4 == 0 && $this->anio%100 !== 0)||$this->anio%400 == 0){
                    $r = 29;
                }else{
                    $r = 28;
                }
                break;
            case 3:
                $r = 31;
                break;
            case 4:
                $r = 30;
                break;
            case 5:
                $r = 31;
                break;
            case 6:
                $r = 30;
                break;
            case 7:
                $r = 31;
                break;
            case 8:
                $r = 31;
                break;
            case 9:
                $r = 30;
                break;
            case 10:
                $r = 31;
                break;
            case 11:
                $r = 30;
                break;
            case 12:
                $r = 31;
                break;
        }

        return $r;
    }

    //COMO HACER PARA QUE SE PUEDA INGRESAR MAS DE 1 MES EN DIAS
    public function incrementoDia($diasInc){
        $diasRestantes = ($this->cant_dias+1) - $this->dia;
        if($diasInc>=$diasRestantes){
            $sumaDias = $diasInc + $this->dia;
            $nuevoDia = $sumaDias - $this->cant_dias;
            if($this->mes == 12){
                $this->mes = 1;
                $this->dia = $nuevoDia;
                $this->anio++;
            }else{
                $this->mes++;
                $this->dia = $nuevoDia;
            }
        }else{
            $this->dia = $this->dia+$diasInc;
        }
    }

    public function abreviada(){
        echo "||      $this->dia/$this->mes/$this->anio      || \n \n";
    }
    public function extendida(){
        
        $r = "";
        switch($this->mes){
            case 1:
                $r = "Enero";
                break;
            case 2:
                $r = "Febrero";
                break;
            case 3:
                $r = "Marzo";
                break;
            case 4:
                $r = "Abril";
                break;
            case 5:
                $r = "Mayo";
                break;
            case 6:
                $r = "Junio";
                break;
            case 7:
                $r = "Julio";
                break;
            case 8:
                $r = "Agosto";
                break;
            case 9:
                $r = "Septiembre";
                break;
            case 10:
                $r = "Octubre";
                break;
            case 11:
                $r = "Noviembre";
                break;
            case 12:
                $r = "Diciembre";
                break;
        }
        echo "||      $this->dia de $r de $this->anio      || \n \n";
    }
}

echo "Ingrese DIA: \n";

$d = trim(fgets(STDIN));

echo "Ingrese MES: \n";

$m = trim(fgets(STDIN));

echo "Ingrese AÑO: \n";

$a = trim(fgets(STDIN));

$f = new Fecha($d,$m,$a);

$cantDias_proximoMes = $f->cantDiasMes($f->getMes()==12 ? 1 : ($f->getMes()+1));

$f->extendida();

do{
echo "Ingrese la cantidad de dias que se quiere aumentar la fecha. MAXIMO: ".($cantDias_proximoMes)."\n";
$inc = trim(fgets(STDIN));
}while($inc>=$cantDias_proximoMes+1);

$f->incrementoDia($inc);
$f->extendida();
?>