<?php 

class Cliente{
    private $nombre;
    private $apellido;
    private $estado;  //boolean que dice si el cliente esta de baja o no
    private $tipoDocumento;
    private $documento;

    public function __toString(){
        $retorno = "__\n||_____ CLIENTE _____||\n||  Nombre: $this->nombre\n||  Apellido: $this->apellido\n||  ¿Está dado de baja?: ".($this->estado ? "Si" : "No")."\n||  Documento: $this->tipoDocumento-$this->documento\n";
        return $retorno;
    }

    public function __construct($n,$a,$e,$t,$d){
        $this->nombre = $n;
        $this->apellido = $a;
        $this->estado = $e;
        $this->tipoDocumento = $t;
        $this->documento = $d;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getTipoDocumento(){
        return $this->tipoDocumento;
    }
    public function getDocumento(){
        return $this->documento;
    }

    public function setNombre($n){
        $this->nombre = $n;
    }
    public function setApellido($a){
        $this->apellido = $a;
    }
    public function setEstado($e){
        $this->estado = $e;
    }
    public function setTipoDocumento($t){
        $this->tipoDocumento = $t;
    }
    public function setDocumento($d){
        $this->documento = $d;
    }


}



?>