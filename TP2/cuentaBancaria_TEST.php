<?php 

    include_once "cuentaBancaria.php";
    $cliente = new Persona("Joel", "Jeckeln", "DNI", "43338753");
    $cuenta = new CuentaBancaria(1,$cliente,10000,20);

    echo $cuenta;
    $cuenta->actualizarSaldo();
    echo $cuenta;
    $cuenta->retirar(10500);
    echo $cuenta;
    $cuenta->depositar(1000);
    echo $cuenta;
    $cuenta->retirar(10500);
    echo $cuenta;
?>