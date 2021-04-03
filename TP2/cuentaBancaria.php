<?php 

include_once "persona.php";

class CuentaBancaria{
    private $idCuenta;
    private Persona $cliente; // objeto de clase Persona
    private $saldoActual;
    private $interesAnual;

    public function __toString(){
        $tostr = "---------------------------------------------\n||  Usuario: ".strtoupper($this->cliente->getApellido()).", ".$this->cliente->getNombre()."\n||  Saldo actual: ".$this->saldoActual."\n";
        return $tostr;
    }

    public function __construct($i,$c,$s,$ia){
        $this->idCuenta = $i;
        $this->cliente = $c;
        $this->saldoActual = $s;
        $this->interesAnual = $i;
    }

    public function getIdCuenta(){
        return $this->idCuenta;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function getSaldoActual(){
        return $this->saldoActual;
    }

    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setIdCuenta($i){
        $this->idCuenta = $i;
    }

    public function setCliente($c){
        $this->cliente = $c;
    }

    public function setSaldoActual($s){
        $this->saldoActual = $s;
    }

    public function setInteresAnual($ia){
        $this->interesAnual = $ia;
    }

    public function actualizarSaldo(){
        $this->saldoActual = $this->saldoActual + (($this->saldoActual*$this->interesAnual)/365);
    }

    public function depositar($c){
        $this->saldoActual = $this->saldoActual + $c; 
        echo "---------------------------------------------\n||  Saldo depositado con exito, ahora tiene ".$this->saldoActual."\n";
    }

    public function retirar($c){
        if($c>$this->saldoActual){
            echo "---------------------------------------------\n|| Saldo no disponible \n";
        }else{
            $this->saldoActual = $this->saldoActual - $c;
            echo "---------------------------------------------\n||  Saldo retirado con exito, ahora tiene ".$this->saldoActual."\n";
        }
    }
}

?>