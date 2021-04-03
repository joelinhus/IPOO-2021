<?php 

include_once "cafetera.php";

$c = new Cafetera(10,3);

echo $c;

$c->agregarCafe(8);

$c->servirTaza(10);

$c->llenarCafetera();

$c->agregarCafe(2);

$c->vaciarCafetera();

$c->agregarCafe(7);

echo $c;
?>