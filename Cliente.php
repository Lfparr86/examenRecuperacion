<?php 
include_once("Dulce.php");
class Cliente{

    public function __construct(
        public string $nombre,
        private int $numero,
        private $dulcesComprados=[],
        private $numDulcesComprados,
        private $numPedidosEfectuados=0
    )
    {
        
    }


        public function getNumPedidosEfectuados()
        {
                return $this->numPedidosEfectuados;
        }

        public function setNumPedidosEfectuados($numPedidosEfectuados)
        {
                $this->numPedidosEfectuados = $numPedidosEfectuados;

                return $this;
        }


        public function getNumDulcesComprados()
        {
                return $this->numDulcesComprados;
        }


        public function setNumDulcesComprados($numDulcesComprados)
        {
                $this->numDulcesComprados = $numDulcesComprados;

                return $this;
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

 public function listaDeDulces(Dulce d):bool{
        for ($i=0; $i <count($this->dulcesComprados) ; $i++) { 
                # code...
        }
        return true;
 }

}
?>