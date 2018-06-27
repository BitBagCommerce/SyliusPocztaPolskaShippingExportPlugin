<?php

class lokalizacjaGeograficznaType
{

    /**
     * @var wspolrzednaGeograficznaType $dlugosc
     */
    protected $dlugosc = null;

    /**
     * @var wspolrzednaGeograficznaType $szerokosc
     */
    protected $szerokosc = null;

    /**
     * @param wspolrzednaGeograficznaType $dlugosc
     * @param wspolrzednaGeograficznaType $szerokosc
     */
    public function __construct($dlugosc, $szerokosc)
    {
      $this->dlugosc = $dlugosc;
      $this->szerokosc = $szerokosc;
    }

    /**
     * @return wspolrzednaGeograficznaType
     */
    public function getDlugosc()
    {
      return $this->dlugosc;
    }

    /**
     * @param wspolrzednaGeograficznaType $dlugosc
     * @return lokalizacjaGeograficznaType
     */
    public function setDlugosc($dlugosc)
    {
      $this->dlugosc = $dlugosc;
      return $this;
    }

    /**
     * @return wspolrzednaGeograficznaType
     */
    public function getSzerokosc()
    {
      return $this->szerokosc;
    }

    /**
     * @param wspolrzednaGeograficznaType $szerokosc
     * @return lokalizacjaGeograficznaType
     */
    public function setSzerokosc($szerokosc)
    {
      $this->szerokosc = $szerokosc;
      return $this;
    }

}
