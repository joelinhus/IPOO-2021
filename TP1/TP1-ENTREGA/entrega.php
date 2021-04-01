<?php 

class Teatro{
    private $nombre;
    private $direccion;
    private $funcionesdehoy = [];

    public function __construct($n,$d){
        $this->nombre = $n;
        $this->direccion = $d;
    }


	public function getNombreFuncion($i) { 
        return $this->funcionesdehoy[$i]['nombre']; 
    } 

    public function setNombreFuncion($i,$n) {  
        $this->funcionesdehoy[$i]['nombre'] = $n; 
    }

    public function getPrecio($i) { 
        return $this->funcionesdehoy[$i]['precio']; 
    } 

    public function setPrecio($i,$p) {  
        $this->funcionesdehoy[$i]['precio'] = $p;
    }








	public function getNombre() { 
 		return $this->nombre; 
	} 

	public function setNombre($nombre) {  
		$this->nombre = $nombre; 
	} 

	public function getDireccion() { 
 		return $this->direccion; 
	} 

	public function setDireccion($direccion) {  
		$this->direccion = $direccion; 
	} 

	public function getFuncionesDeHoy() { 
 		return $this->funcionesdehoy; 
	} 

	public function setFuncionesDeHoy($funcionesdehoy) {  
		$this->funcionesdehoy = $funcionesdehoy; 
	} 
}


?>