<?php 
class Reloj{
    private $horas;
    private $minutos;
    private $segundos;

    public function __construct($h,$m,$s){
        $this->horas = $h;
        $this->minutos = $m;
        $this->segundos = $s;
    }


    public function incrementoSeg(){
        $this->segundos++;
        if($this->segundos==60){
            $this->segundos=0;
            $this->incrementoMin();
        }
    }
    public function incrementoMin(){
        $this->minutos++;
        if($this->minutos==60 || $this->segundos==60){
            if($this->segundos==60) {
                $this->segundos=0;
            }
            $this->minutos=0;
            $this->incrementoHora();
        }
    }

    public function incrementoHora(){
        $this->horas++;
        if($this->horas==24){
            $this->horas = 0;
            $this->minutos = 0;
            $this->segundos = 0;
        }
    }

    public function __toString(){
        $retorno = (($this->horas<=9) ? "0" : "").$this->horas.":";
        $retorno .= (($this->minutos<=9) ? "0" : "").$this->minutos.":";
        $retorno .= (($this->segundos<=9) ? "0" : "").$this->segundos;
        return $retorno;
    }
}

$r = new Reloj(2,59,59);
echo "\n ||      ".$r."      ||\n";
$resp = 0;
while($resp!=1){

    echo "Incrementar segundos: (1) \n";
    echo "Incrementar minutos: (2) \n";
    echo "Incrementar horas: (3) \n";
    $entrada = trim(fgets(STDIN));

    switch($entrada){
        case 1:
            $r->incrementoSeg();
            break;
        case 2:
            $r->incrementoMin();
            break;
        case 3:
            $r->incrementoHora();
            break;
        default:
            echo "Caracter invalido \n";
            break;
    }
    echo "\n ||      ".$r."      ||\n";
    echo "¿Quiere continuar cambiando la hora? 0: Si   1: No \n";
    $resp  = trim(fgets(STDIN));
}
?>