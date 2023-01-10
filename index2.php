<?php 

$bollo1 = new Bollo("Rosco",3,5,"chocolate");
echo $bollo1->$nombre;
echo $bollo1->getNumero();
echo $bollo1->getPrecio();
echo $bollo1->getRelleno();
echo $bollo1->muestraResumen();
?>