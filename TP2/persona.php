<?php 

class Persona{
    private $nombre;
    private $apellido;
    private $tipo;
    private $documento;

    public function __construct($n,$a,$t,$d){
        $this->nombre = $n;
        $this->apellido = $a;
        $this->tipo = $t;
        $this->dni = $d;
    }

    public function __toString(){
        echo "";
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($n){
        $this->nombre = $n;
    }

    
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($a){
        $this->apellido = $a;
    }


    public function getTipoDocumento(){
        return $this->tipo;
    }
    public function setTipoDocumento($t){
        $this->tipo = $t;
    }


    public function getDocumento(){
        return $this->documento;
    }
    public function setDocumento($d){
        $this->documento = $d;
    }
}

?>