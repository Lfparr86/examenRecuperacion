<?php 
$tarta1 = new Tarta("Selva negra",2,5,"nata",5,2,5);
echo $tarta1->nombre;
echo $tarta1->getNumero();
echo $tarta1->getPrecio();
echo $tarta1->rellenos[1];
echo $tarta1->getNumeroPisos();
echo $tarta1->getMinNumComensales();
echo $tarta1->getMaxNumComensales();
echo $tarta1->muestraResumen();
?>