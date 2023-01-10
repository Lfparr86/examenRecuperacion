<?php

class Tarta extends Dulce
{

    public function __construct(
        $nombre,
        $numero,
        $precio,
        private $rellenos = [],
        private int $numeroPisos,
        private int $minNumComensales = 2,
        private int $maxNumComensales = 2
    ) {
        parent::__construct($nombre, $numero, $precio);
    }



    public function getNumeroPisos()
    {
        return $this->numeroPisos;
    }

    public function setNumeroPisos($numeroPisos)
    {
        $this->numeroPisos = $numeroPisos;

        return $this;
    }


    public function getMinNumComensales()
    {
        return $this->minNumComensales;
    }


    public function setMinNumComensales($minNumComensales)
    {
        $this->minNumComensales = $minNumComensales;

        return $this;
    }


    public function getMaxNumComensales()
    {
        return $this->maxNumComensales;
    }


    public function setMaxNumComensales($maxNumComensales)
    {
        $this->maxNumComensales = $maxNumComensales;

        return $this;
    }

    public function muestraComensalesPosibles()
    {

        if ($this->minNumComensales >= 2 || $this->maxNumComensales = 2) {
            return $this->minNumComensales;
        } else {
            return $this->minNumComensales . "y" . $this->maxNumComensales;
        }
    }


    public function muestraResumen()
    {
        return parent::muestraResumen() . $this->getNumeroPisos() . $this->getMinNumComensales() . $this->getMaxNumComensales();
    }
}
