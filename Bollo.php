<?php 

class Bollo extends Dulce{

public function __construct(
     $nombre,
     $numero,
     $precio,
     private string $relleno

     
)
{
    parent::__construct($nombre,$numero,$precio);  
}

public function muestraResumen(){
    return parent::muestraResumen().$this->getRelleno();
}



     public function getRelleno()
     {
          return $this->relleno;
     }


     public function setRelleno($relleno)
     {
          $this->relleno = $relleno;

          return $this;
     }
}


?>