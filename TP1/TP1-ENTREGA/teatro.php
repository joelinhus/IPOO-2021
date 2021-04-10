<?php 

class Teatro{
    private $nombre;
    private $direccion;
    private $funcionesdehoy = [];

    public function __construct($n,$d,$fdh){
        $this->nombre = $n;
        $this->direccion = $d;
		$this->funcionesdehoy = $fdh;
    }

	public function __toString(){
		return  "||  Teatro ".$this->nombre." \n||  Direccion ".$this->direccion." \n";
	}

	public function modificarXFuncion($r,$n,$p){
		$this->funcionesdehoy[$r]['nombre'] = $n;
		$this->funcionesdehoy[$r]['precio'] = $p;
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