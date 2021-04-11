<?php 
    include_once("cliente.php");
    include_once("producto.php");
    include_once("venta.php");

class Empresa{
    private $denominacion;
    private $direccion;
    private $clientes=[];
    private $productos=[];
    private $ventas=[];

    public function retornarVehiculo($codProducto){
        for($i=0;$i<count($this->productos);$i++){
            if($this->productos[$i]->getCodigo()==$codProducto){
                return $this->productos[$i];
            }
        }
    }
//flag es una variable bandera, que seria utilizada si esto tuviese una interfaz de usuario, para generar un bucle en el que pida codigos hasta que al menos 1
//coincida con uno en la coleccion de productos de la empresa o un cliente que no este dado de baja
    public function registrarVenta($codProductos, $cliente){
        //$flag = false;
        if($cliente->getEstado()){
            echo "-----------------------------------------------\n||  El cliente está dado de baja.\n";
            //$flag = false;
        }else{
            $nuevaVenta = new Venta((count($this->ventas)==0 ? 1 : $this->ventas[count($this->ventas)-1]->getNumero()+1),date("d/m/Y"),$cliente,[],0);
            //$nuevaVenta = new Venta(($this->productos[count($this->productos)-1]->getCodigo()+1),date("d/m/Y"),$cliente,[],0);
            for($i=0;$i<count($codProductos);$i++){
                for($j=0;$j<count($this->productos);$j++){
                    if($codProductos[$i]==$this->productos[$j]->getCodigo()){
                        if($this->productos[$j]) {$nuevaVenta->incorporarProducto($this->productos[$j]);}
                    }
                }
            }
            if($nuevaVenta->getProductos()==[]){
                echo "||  Los productos ingresados no son validos. \n-----------------------------------------------\n";
                //$flag = false;
            }else{
                $this->ventas[] = $nuevaVenta;
                //$flag = true;
            }
        }
        //return $flag;
    }

    public function retornarVentasXCliente($tipo, $numDoc){
        $ventasCliente = [];
        for($i=0;$i<count($this->ventas);$i++){
            if(($this->ventas[$i]->getCliente()->getTipoDocumento() == $tipo) && ($this->ventas[$i]->getCliente()->getDocumento()==$numDoc)){
                $ventasCliente[] = $this->ventas[$i];
            }
        }
        return $ventasCliente;
    }

    public function __toString(){
        $retorno = "\n\n------------------------------\n||_____ EMPRESA $this->denominacion _____||\n||  Direccion: $this->direccion\n";
        for($i=0;$i<count($this->clientes);$i++){
            $retorno .= $this->clientes[$i]."\n";
        }
        for($i=0;$i<count($this->productos);$i++){
            $retorno .= $this->productos[$i]."||  Venta: ".$this->productos[$i]->darPrecioVenta()."\n";
        }
        for($i=0;$i<count($this->ventas);$i++){
            $retorno .= $this->ventas[$i];
        }
        return $retorno;
    }

    public function __construct($d,$dir,$c,$p,$v){
        $this->denominacion = $d;
        $this->direccion = $dir;
        $this->clientes = $c;
        $this->productos = $p;
        $this->ventas = $v;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getClientes(){
        return $this->clientes;
    }
    public function getProductos(){
        return $this->productos;
    }
    public function getVentas(){
        return $this->ventas;
    }

    public function setDenominacion($d){
        $this->denominacion = $d;
    }
    public function setDireccion($dir){
        $this->direccion = $dir;
    }
    public function setClientes($c){
        $this->clientes = $c;
    }
    public function setProductos($p){
        $this->productos = $p;
    }
    public function setVentas($v){
        $this->ventas = $v;
    }
}

?>