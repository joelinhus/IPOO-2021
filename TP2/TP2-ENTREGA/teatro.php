<?php 
	include_once "funcion.php";
class Teatro{
    private $nombre;
    private $direccion;
    private $funcionesdehoy = [];

    public function __construct($n,$d){
        $this->nombre = $n;
        $this->direccion = $d;
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