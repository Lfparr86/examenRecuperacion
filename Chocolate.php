<?php 

class Chocolate extends Dulce{

    public function __construct(
        $nombre,
        $numero,
        $precio,
        private int $porcentajeCacao,
        private float $peso
    )
    {
       
        parent::__construct($nombre,$numero,$precio);
    }

    public function muestraResumen()
    {
        return parent::muestraResumen().$this->porcentajeCacao.$this->peso;
    }


        public function getPorcentajeCacao()
        {
                return $this->porcentajeCacao;
        }


        public function setPorcentajeCacao($porcentajeCacao)
        {
                $this->porcentajeCacao = $porcentajeCacao;

                return $this;
        }

   
        public function getPeso()
        {
                return $this->peso;
        }

    
        public function setPeso($peso)
        {
                $this->peso = $peso;

                return $this;
        }
}

?>