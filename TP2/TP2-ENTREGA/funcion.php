<?php 

class Funcion{
    private $nombre;
    private $precio;
    private $horarioInicio;
    private $duracion;

    public function __construct($n,$p,$h,$d){
        $this->nombre = $n;
        $this->precio = $p;
        $this->horarioInicio = $h;
        $this->duracion = $d;
    }
    //devuelve entero, si es igual a 4, entonces los horarios no se solapan, si es menor a 4 al menos una funcion se solapa con la nueva
    public function compararHorarios($nuevaFuncion){
        $valid = 0;
        $horarioFinalizacion =$this->horarioInicio + $this->duracion;
        $horarioFinalizacionNueva = $nuevaFuncion->getHorarioInicio() + $nuevaFuncion->getDuracion();
        if($nuevaFuncion->getHorarioInicio()>$horarioFinalizacion){
            
            $valid++;
        }else if($nuevaFuncion->getHorarioInicio()<$this->horarioInicio && $horarioFinalizacionNueva<$this->horarioInicio){

            $valid++;
        }
        return $valid;
    }


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

    public function getHorarioInicio() { 
        return $this->horarioInicio; 
    } 

    public function setHorarioInicio($h) {  
       $this->horarioInicio = $h; 
    }

    public function getDuracion() { 
        return $this->duracion; 
    } 

    public function setDuracion($d) {  
       $this->duracion = $d; 
    }
}

?>