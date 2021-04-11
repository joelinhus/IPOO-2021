<?php 

include_once("cliente.php");
include_once("producto.php");
include_once("venta.php");
include_once("empresa.php");

    $objCliente1 = new Cliente("Joel","Jeckeln",false,"DNI","43338753");
    $objCliente2 = new Cliente("Noel","Jeckeln",false,"DNI","18554091");

    $objProducto3 = new Producto(11,50000,2018,"Cemento Loma Negra",70,true);
    $objProducto4 = new Producto(12,10000,2019,"Hierro del 12",60,true);
    $objProducto5 = new Producto(13,10000,2020,"Cal Santa Clara",50,false);

    $objEmpresa9 = new Empresa("COSMOS","Av. Argentina 123",[$objCliente1,$objCliente2],[$objProducto3,$objProducto4,$objProducto5],[]);
    
    $col = [11,12,13];
    $objEmpresa9->registrarVenta($col,$objCliente2);

    $col = [2];
    $objEmpresa9->registrarVenta($col,$objCliente2);

    $ventasCliente1 = $objEmpresa9->retornarVentasXCliente("DNI",43338753);
    if($ventasCliente1==[]){
        echo "||  El cliente elegido no tiene ventas a su nombre. \n";
    }else{
        for($i=0;$i<count($ventasCliente1);$i++){
            echo $ventasCliente1[$i];
        }
    }

    $ventasCliente2 = $objEmpresa9->retornarVentasXCliente("DNI",18554091);
    echo "-----------------------------------------------\n";
    if($ventasCliente2==[]){
        echo "||  El cliente elegido no tiene ventas a su nombre. \n";
    }else{
        for($i=0;$i<count($ventasCliente2);$i++){
            echo $ventasCliente2[$i];
        }
    }

    echo $objEmpresa9;
    
    
?>