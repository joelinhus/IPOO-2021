<?php 

class Login{
    private $usuario;
    private $contrasenia;
    private $pista;
    public $ultimascontrasenias = [];

    public function __construct($u,$c,$p){
        $this->usuario = $u;
        $this->contrasenia = $c;
        $this->pista = $p;
    }

    public function verificar($c){
        if(strcmp($this->contrasenia,$c)==0){
            echo "\n Login verificado. ¡Bienvenido al sitio!\n ";
            $r = true;
        }else{
            echo "\n Contraseña incorrecta. Ingresela nuevamente.\n ";
            $r = false;
        }
        return $r;
    }

    public function cambiarContrasenia($c){
        $countCntr = 0;
        for($j=0;$j<count($this->ultimascontrasenias);$j++){
            if(strcmp($this->ultimascontrasenias[$j],$c) == 0){
                echo $countCntr++;
            } 
        }
        $v = false;
        if($countCntr <= 0){
            $this->contrasenia = $c; 
            echo "\n  La contraseña ha sido cambiada con exito. \n ";
            $v = true;
        }else{
            echo "\n La contraseña ha sido utilizada recientemente. Por favor ingrese otra. \n ";
            $v = false;
        }

        return $v;
    }

    public function recordarContrasenia(){
        $this->ultimascontrasenias[] = $this->contrasenia;
    }


	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario( $u) {
		$this->usuario = $u;
	}

	public function getContrasenia() {
		return $this->contrasenia;
	}

	public function setContrasenia($c) {
		$this->contrasenia = $c;
	}

	public function getPista() {
		return $this->pista;
	}

	public function setPista( $p) {
		$this->pista = $p;
	}
}
$u = "joelinhus";
$c = "12qwQWqw";
$p = "la de siempre capo";
$l = new Login($u,$c,$p);
$r = false;
while($r==false){
    echo "\n Usuario: $u \n Contraseña: \n |";
    $pass = trim(fgets(STDIN));
    $r = $l->verificar($pass);
}
$r=1;
while($r!=0){
echo "\n Ingrese la nueva contraseña: \n";
$pass = trim(fgets(STDIN));
$v = $l->cambiarContrasenia($pass);

if($v){
    echo "\n ¿Desea guardar la contraseña? 1: SI 0: NO \n";
    $res = trim(fgets(STDIN));
    $res == 1 ? $l->recordarContrasenia() : "";
}


echo "\n ¿Quiere continuar? 1: SI 0: NO \n";
$r = trim(fgets(STDIN));
}

print_r($l->ultimascontrasenias);

?>