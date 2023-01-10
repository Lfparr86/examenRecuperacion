<?php 
class Dulce{

    private const IVA =21;

    public function __construct(
       public string $nombre,
       protected int $numero,
       private float $precio
       
    ){}

    public function muestraResumen(){
        $muestra= $this->nombre.$this->getNumero().$this->getPrecio(); 
        return $muestra;
    }

    public function getPrecioConIVA(){
        
        return ($this->precio *1+ self::IVA)/100;
    }


  
       public function getNumero()
       {
              return $this->numero;
       }

       public function setNumero($numero)
       {
              $this->numero = $numero;

              return $this;
       }

       public function getPrecio()
       {
              return $this->precio;
       }

       public function setPrecio($precio)
       {
              $this->precio = $precio;

              return $this;
       }
}

?>