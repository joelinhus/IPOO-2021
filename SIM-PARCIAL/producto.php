<?php 

class Producto{
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcIncrementoAnual;
    private $activo; //boolean que indica si el producto esta disponible para la venta

    public function __toString(){
        $retorno = 
        "__\n||_____ PRODUCTO-n°$this->codigo _____||\n||  Costo: $this->costo\n||  Año de fabricación: $this->anioFabricacion\n||  Descripcion: $this->descripcion\n||  Porcentaje de incremento anual: $this->porcIncrementoAnual%\n||  ¿Está disponible para la venta?: ".($this->activo ? "Si" : "No")."\n";
        return $retorno;
    }

    public function darPrecioVenta(){
        $aniosFabricado = date("Y") - $this->anioFabricacion;
        $this->activo ? $retorno = $this->costo + ($this->costo*($aniosFabricado*$this->porcIncrementoAnual)) : $retorno = -1;
        return $retorno;
    }

    public function __construct($c,$ct,$af,$d,$pca,$a){
        $this->codigo = $c;
        $this->costo = $ct;
        $this->anioFabricacion = $af;
        $this->descripcion = $d;
        $this->porcIncrementoAnual = $pca;
        $this->activo = $a;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getAnioFabricacion(){
        return $this->anioFabricacion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPorcIncrementoAnual(){
        return $this->porcIncrementoAnual;
    }
    public function getActivo(){
        return $this->activo;
    }

    public function setCodigo($c){
        $this->codigo = $c;
    }
    public function setCosto($ct){
        $this->costo = $ct;
    }
    public function setAnioFabricacion($af){
        $this->anioFabricacion = $af;
    }
    public function setDescripcion($d){
        $this->descripcion = $d;
    }
    public function setPorcIncrementoAnual($pca){
        $this->porcIncrementoAnual = $pca;
    }
    public function setActivo($a){
        $this->activo = $a;
    }
}

?>