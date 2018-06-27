<?php

class paletaType
{

    /**
     * @var rodzajPaletyType $rodzajPalety
     */
    protected $rodzajPalety = null;

    /**
     * @var int $szerokosc
     */
    protected $szerokosc = null;

    /**
     * @var string $dlugosc
     */
    protected $dlugosc = null;

    /**
     * @var string $wysokosc
     */
    protected $wysokosc = null;

    /**
     * @param rodzajPaletyType $rodzajPalety
     * @param int $szerokosc
     * @param string $dlugosc
     * @param string $wysokosc
     */
    public function __construct($rodzajPalety, $szerokosc, $dlugosc, $wysokosc)
    {
      $this->rodzajPalety = $rodzajPalety;
      $this->szerokosc = $szerokosc;
      $this->dlugosc = $dlugosc;
      $this->wysokosc = $wysokosc;
    }

    /**
     * @return rodzajPaletyType
     */
    public function getRodzajPalety()
    {
      return $this->rodzajPalety;
    }

    /**
     * @param rodzajPaletyType $rodzajPalety
     * @return paletaType
     */
    public function setRodzajPalety($rodzajPalety)
    {
      $this->rodzajPalety = $rodzajPalety;
      return $this;
    }

    /**
     * @return int
     */
    public function getSzerokosc()
    {
      return $this->szerokosc;
    }

    /**
     * @param int $szerokosc
     * @return paletaType
     */
    public function setSzerokosc($szerokosc)
    {
      $this->szerokosc = $szerokosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getDlugosc()
    {
      return $this->dlugosc;
    }

    /**
     * @param string $dlugosc
     * @return paletaType
     */
    public function setDlugosc($dlugosc)
    {
      $this->dlugosc = $dlugosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getWysokosc()
    {
      return $this->wysokosc;
    }

    /**
     * @param string $wysokosc
     * @return paletaType
     */
    public function setWysokosc($wysokosc)
    {
      $this->wysokosc = $wysokosc;
      return $this;
    }

}
