<?php 

    include_once "entrega.php";

    $t = new Teatro("Village","Don Bosco 545");

    $t->setNombreFuncion(0,"Los Increibles");
    $t->setPrecio(0,400);
    $t->setNombreFuncion(1,"Spiderman 2");
    $t->setPrecio(1,800);
    $t->setNombreFuncion(2,"Toy Story");
    $t->setPrecio(2,1000);
    $t->setNombreFuncion(3,"Bugs");
    $t->setPrecio(3,200);
    
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
                    echo "||  Pelicula: ".$t->getFuncionesDeHoy()[$i]["nombre"]."\n";
                    echo "||  Precio: ".$t->getFuncionesDeHoy()[$i]["precio"]."\n";
                    echo $i == count($t->getFuncionesDeHoy())-1 ? "" : "--------------------------------------------------------------\n";
                }
                break;
            case 5: //Modificar funciones de hoy
                echo "||  ¿Qué función desea modificar? \n";

                for($i = 0;$i<count($t->getFuncionesDeHoy());$i++){
                    echo "||  ( $i ) Pelicula: ".$t->getFuncionesDeHoy()[$i]["nombre"];
                    echo "  Precio: ".$t->getFuncionesDeHoy()[$i]["precio"]."\n";
                }
                $resp = trim(fgets(STDIN));

                echo "||  Elegiste: ".$t->getFuncionesDeHoy()[$resp]["nombre"]." con precio de ".$t->getFuncionesDeHoy()[$resp]["precio"]."\n";
                
                echo "||  Ingrese el nuevo nombre de la funcion: \n";
                $nnf = trim(fgets(STDIN));
                echo "\n||  Ingrese el nuevo precio de la funcion: \n";
                $np = trim(fgets(STDIN));

                $t->setNombreFuncion($resp,$nnf);
                $t->setPrecio($resp,$np);

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