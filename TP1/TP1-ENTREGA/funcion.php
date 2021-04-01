<?php 

class Funcion{
    private $nombre;
    private $precio;

    public function getNombre() { 
        return $this->nombre; 
    } 

    public function setNombre($n) {  
       $this->nombre = $n; 
    }

    public function getPrecio() { 
        return $this->precio; 
    } 

    public function setPrecio($p) {  
        $this->precio = $p; 
    }
    
}

?>