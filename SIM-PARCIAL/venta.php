<?php 
    include_once("cliente.php");
    include_once("producto.php");
class Venta{
    private $numero;
    private $fecha;
    private Cliente $cliente;
    private $productos=[];
    private $precioFinal;

    public function __construct($n,$f,$c,$p,$pf){
        $this->numero = $n;
        $this->fecha = $f;
        $this->cliente = $c;
        $this->productos = $p;
        $this->precioFinal = $pf;
    }

    public function __toString(){
        $retorno = "\n__\n||_____ VENTA-n°$this->numero _____||\n||  Fecha: $this->fecha $this->cliente";
        $count = 0;
        for($i=0;$i<count($this->productos);$i++){
            $retorno .= $this->productos[$i]."\n";
        }
        //$retorno .= $this->productos[$i]."||  Venta: ".$this->productos[$i]->darPrecioVenta()."\n";
        $retorno .= "\n-------------------------------------\n||  Precio final: $this->precioFinal";
        return $retorno;
    }

    public function incorporarProducto(Producto $obj){
        if($obj->getActivo()){
            $this->productos[] = $obj;
            $this->precioFinal += $obj->darPrecioVenta();
            echo "||  El producto ".$obj->getDescripcion()." fue agregado a la venta! \n";
        }else{
            echo "||  El producto ".$obj->getDescripcion()." está inactivo.\n||  La venta se realizara con los productos que si estan activos.\n-----------------------------------------------\n";
        }
    }

    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function getProductos(){
        return $this->productos;
    }
    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setNumero($n){
        $this->numero = $n;
    }
    public function setFecha($f){
        $this->fecha = $f;
    }
    public function setCliente($c){
        $this->cliente = $c;
    }
    public function setProductos($p){
        $this->productos = $p;
    }
    public function setPrecioFinal($pf){
        $this->precioFinal = $pf;
    }
}

?>