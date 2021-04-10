<?php 

    include_once "teatro.php";
    include_once "funcion.php";

    $t = new Teatro("Village","Don Bosco 545");

    $f1 = new Funcion("Los Increibles",400,11,2) ;
    $f2 = new Funcion("Spiderman 2",800,16,2) ;
    $f3 = new Funcion("Toy Story",1000,19,2) ;
    $f4 = new Funcion("Bugs",200,22,2) ;
    //al ingresar horarios verificar si no se solapan
    
    $t->setFuncionesDeHoy(array($f1,$f2,$f3,$f4));

    echo "||  Teatro ".$t->getNombre()." \n";
    echo "||  ".$t->getDireccion()." \n";

    do {

        $opcionValida = false;
        $count = 0;
        do {
            echo $count > 0 ? "||  Opcion inválida, ingrese nuevamente \n" : "";
            echo "--------------------------------------------------------------\n";
            echo "\n||  ( 1 ) Mostrar datos del Teatro";
            echo "\n||  ( 2 ) Modificar nombre del Teatro";
            echo "\n||  ( 3 ) Modificar direccion del Teatro";
            echo "\n||  ( 4 ) Mostrar funciones de hoy";
            echo "\n||  ( 5 ) Modificar funciones de hoy";
            echo "\n||  ( 6 ) Salir \n";
            echo "\n||  Indique una opcion válida: ";
            $opcion = trim(fgets(STDIN));
            echo "\n--------------------------------------------------------------\n";
            $count++;
            $opcionValida = $opcion >= 1 && $opcion <= 6;
        } while (!$opcionValida);

        switch ($opcion) {
            case 1: //Mostrar datos del Teatro
                echo "||  Teatro ".$t->getNombre()." \n";
                echo "||  Direccion ".$t->getDireccion()." \n";
                break;
            case 2: //modificar nombre del teatro
                echo "||  Ingrese el nuevo nombre del teatro: \n";
                $nn = trim(fgets(STDIN));
                $t->setNombre($nn);
                echo "||  Nombre cambiado exitosamente \n";
                break;
            case 3: //modificar direccion del teatro
                echo "||  Ingrese la nueva dirección del teatro: \n";
                $nd = trim(fgets(STDIN));
                $t->setDireccion($nd);
                echo "||  Direccion cambiada exitosamente \n";
                break;
            case 4: //Mostrar las funciones pre-cargadas
                for($i = 0;$i<count($t->getFuncionesDeHoy());$i++){
                    echo "||  Pelicula: ".$t->getFuncionesDeHoy()[$i]->getNombre()."\n";
                    echo "||  Precio: ".$t->getFuncionesDeHoy()[$i]->getPrecio()."$\n";
                    echo "||  Horario de inicio: ".$t->getFuncionesDeHoy()[$i]->getHorarioInicio()."hs\n";
                    echo "||  Duracion: ".$t->getFuncionesDeHoy()[$i]->getDuracion()."hs\n";
                    echo $i == count($t->getFuncionesDeHoy())-1 ? "" : "--------------------------------------------------------------\n";
                }
                break;
            case 5: //Modificar funciones de hoy
                echo "||  ¿Qué función desea modificar? \n";

                do{
                    for($i = 0;$i<count($t->getFuncionesDeHoy());$i++){
                        echo "||  ( $i ) Pelicula: ".$t->getFuncionesDeHoy()[$i]->getNombre();
                        echo "  Precio: ".$t->getFuncionesDeHoy()[$i]->getPrecio();
                        echo "  Horario Inicio: ".$t->getFuncionesDeHoy()[$i]->getHorarioInicio()."hs";
                        echo "  Duracion: ".$t->getFuncionesDeHoy()[$i]->getDuracion()."hs\n";
                    }
                    $resp = trim(fgets(STDIN));
                }while(!($resp>=0 && $resp<count($t->getFuncionesDeHoy())));

                echo "||  Elegiste: ".$t->getFuncionesDeHoy()[$resp]->getNombre()." con precio de ".$t->getFuncionesDeHoy()[$resp]->getPrecio().", estimada a iniciar a las ".$t->getFuncionesDeHoy()[$resp]->getHorarioInicio()."horas, y duración de ".$t->getFuncionesDeHoy()[$resp]->getDuracion()."horas\n";
                
                echo "||  Ingrese el nuevo nombre de la funcion: \n";
                $nnf = trim(fgets(STDIN));
                echo "\n||  Ingrese el nuevo precio de la funcion: \n";
                $np = trim(fgets(STDIN));
                echo "\n||  Ingrese la nueva duracion de la funcion: \n";
                $nd = trim(fgets(STDIN));
                $valid = false;
                do{
                    echo "Los nuevos horarios estan en conflicto con al menos una de las otras funciones de hoy. Intentelo nuevamente";
                    echo "\n||  Ingrese el nuevo horario de inicio de la funcion: \n";
                    $nh = trim(fgets(STDIN));
                    $nFuncion = new Funcion($nnf,$np,$nh,$nd);
                    $valid = 0;
                    for($i=0;$i<count($t->getFuncionesDeHoy());$i++){
                        if($i != $resp){
                            $valid = $valid + $t->getFuncionesDeHoy()[$i]->compararHorarios($nFuncion);
                            echo $valid." ".$t->getFuncionesDeHoy()[$i]->getNombre($nFuncion)."\n";
                        }
                    }
                }while($valid != count($t->getFuncionesDeHoy())-1);

                
                $t->getFuncionesDeHoy()[$resp]->setNombre($nnf);
                $t->getFuncionesDeHoy()[$resp]->setPrecio($np);
                $t->getFuncionesDeHoy()[$resp]->setHorarioInicio($nh);
                $t->getFuncionesDeHoy()[$resp]->setDuracion($nd);

                echo "||  Función actualizada con éxito \n";
                break;
            case 6: //bye bye
                print("\n||  Fin del programa \n");
                break;
            default://esa no era
                print("||  La opcion elegida no existe \n");
                break;
        }
    } while ($opcion != 6);
?>