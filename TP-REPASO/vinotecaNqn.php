<?php 
    /*
                                                        Hardcodeado como la mismisima

    Realizar el diseño y la correspondiente implementación en PHP de un script vinotecaNqn.php del siguiente enunciado:


    Dado una estructura de arreglos asociativos, donde cada posición del arreglo se corresponde con una variedad de vino 
    (malbec, cabernet Sauvignon, Merlot) y se almacena la siguiente información: variedad, cantidad de botellas, año de 
    producción, precio por unidad:

    1. Implementar una función que reciba un arreglo con las características  mencionadas y retorne  un arreglo que por 
    variedad de vino guarde la cantidad total de botellas y el precio promedio.
    2. Implementar una función main() que cree un arreglo con las características mencionadas, invoque a la función 
    implementada en 1 y visualice su resultado
    3. Subir a su cuenta GitHub la resolución del Trabajo Practico de Repaso.
    
    */

    function promedioVino($vinoteca){
        
        $count = count($vinoteca);
        $retorno = array();

        $totalBotellasMalbec = 0;
        $totalPrecioMalbec = 0;
        $totalBotellasCabernet = 0;
        $totalPrecioCabernet = 0;
        $totalBotellasMerlot = 0;
        $totalPrecioMerlot = 0;

        $countMalbec = count($vinoteca["Malbec"]);
        $countCabernet = count($vinoteca["Cabernet"]);
        $countMerlot = count($vinoteca["Merlot"]);

        for($j=0;$j<$countMalbec;$j++){
            $totalBotellasMalbec+=$vinoteca["Malbec"][$j]["cantidadBotellas"];
            $totalPrecioMalbec+=$vinoteca["Malbec"][$j]["precioUnidad"];
        }

        for($j=0;$j<$countCabernet;$j++){
            $totalBotellasCabernet+=$vinoteca["Cabernet"][$j]["cantidadBotellas"];
            $totalPrecioCabernet+=$vinoteca["Cabernet"][$j]["precioUnidad"];
        }

        for($j=0;$j<$countMerlot;$j++){
            $totalBotellasMerlot+=$vinoteca["Merlot"][$j]["cantidadBotellas"];
            $totalPrecioMerlot+=$vinoteca["Merlot"][$j]["precioUnidad"];
        }

        $promedioMalbec = $totalPrecioMalbec/$countMalbec; 
        $promedioCabernet = $totalPrecioCabernet/$countCabernet; 
        $promedioMerlot = $totalPrecioMerlot/$countMerlot; 

        $retorno = array();
            $retorno["Malbec"] = array("totalBotellas"=>$totalBotellasMalbec,"precioPromedio"=>$promedioMalbec);
            $retorno["Cabernet"] = array("totalBotellas"=>$totalBotellasCabernet,"precioPromedio"=>$promedioCabernet);
            $retorno["Merlot"] = array("totalBotellas"=>$totalBotellasMerlot,"precioPromedio"=>$promedioMerlot);
        return $retorno;
    }

    function main(){
        $malbec = array();
            $malbec[0] = array("cantidadBotellas"=>43,"añoDeProduccion"=>"1987","precioUnidad"=>1000);
            $malbec[1] = array("cantidadBotellas"=>17,"añoDeProduccion"=>"1964","precioUnidad"=>1210);
            $malbec[2] = array("cantidadBotellas"=>5,"añoDeProduccion"=>"1951","precioUnidad"=>1300);
        $cabernet = array();
            $cabernet[0] = array("cantidadBotellas"=>32,"añoDeProduccion"=>"1991","precioUnidad"=>1200);
            $cabernet[1] = array("cantidadBotellas"=>12,"añoDeProduccion"=>"1980","precioUnidad"=>1440);
            $cabernet[2] = array("cantidadBotellas"=>2,"añoDeProduccion"=>"1942","precioUnidad"=>1620);
        $merlot = array();
            $merlot[0] = array("cantidadBotellas"=>55,"añoDeProduccion"=>"1985","precioUnidad"=>1150);
            $merlot[1] = array("cantidadBotellas"=>24,"añoDeProduccion"=>"1977","precioUnidad"=>1370);
            $merlot[2] = array("cantidadBotellas"=>10,"añoDeProduccion"=>"1964","precioUnidad"=>1560);

        $vinoteca = array(
        "Malbec" => $malbec,
        "Cabernet" => $cabernet,
        "Merlot" => $merlot
        );

        $datos = promedioVino($vinoteca);
    
        echo "El precio promedio de vinos Malbec es de ".$datos["Malbec"]["precioPromedio"]." pesos \n";
        echo "El total de botellas de vinos Malbec es de ".$datos["Malbec"]["totalBotellas"]."\n \n";

        echo "El precio promedio de vinos Cabernet es de ".$datos["Cabernet"]["precioPromedio"]." pesos \n";
        echo "El total de botellas de vinos Cabernet es de ".$datos["Cabernet"]["totalBotellas"]."\n \n";

        echo "El precio promedio de vinos Merlot es de ".$datos["Merlot"]["precioPromedio"]." pesos \n";
        echo "El total de botellas de vinos Merlot es de ".$datos["Merlot"]["totalBotellas"]."\n \n";
    }  
    main();
?>