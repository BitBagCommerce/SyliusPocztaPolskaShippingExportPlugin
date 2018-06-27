<?php

class szczegolyDeklaracjiCelnejType
{

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var float $ilosc
     */
    protected $ilosc = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var int $wartosc
     */
    protected $wartosc = null;

    /**
     * @var string $numerTaryfowy
     */
    protected $numerTaryfowy = null;

    /**
     * @var string $krajPochodzenia
     */
    protected $krajPochodzenia = null;

    /**
     * @param string $zawartosc
     * @param float $ilosc
     * @param int $masa
     * @param int $wartosc
     * @param string $numerTaryfowy
     * @param string $krajPochodzenia
     */
    public function __construct($zawartosc, $ilosc, $masa, $wartosc, $numerTaryfowy, $krajPochodzenia)
    {
      $this->zawartosc = $zawartosc;
      $this->ilosc = $ilosc;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->numerTaryfowy = $numerTaryfowy;
      $this->krajPochodzenia = $krajPochodzenia;
    }

    /**
     * @return string
     */
    public function getZawartosc()
    {
      return $this->zawartosc;
    }

    /**
     * @param string $zawartosc
     * @return szczegolyDeklaracjiCelnejType
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
      return $this;
    }

    /**
     * @return float
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param float $ilosc
     * @return szczegolyDeklaracjiCelnejType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return int
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param int $masa
     * @return szczegolyDeklaracjiCelnejType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return int
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param int $wartosc
     * @return szczegolyDeklaracjiCelnejType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerTaryfowy()
    {
      return $this->numerTaryfowy;
    }

    /**
     * @param string $numerTaryfowy
     * @return szczegolyDeklaracjiCelnejType
     */
    public function setNumerTaryfowy($numerTaryfowy)
    {
      $this->numerTaryfowy = $numerTaryfowy;
      return $this;
    }

    /**
     * @return string
     */
    public function getKrajPochodzenia()
    {
      return $this->krajPochodzenia;
    }

    /**
     * @param string $krajPochodzenia
     * @return szczegolyDeklaracjiCelnejType
     */
    public function setKrajPochodzenia($krajPochodzenia)
    {
      $this->krajPochodzenia = $krajPochodzenia;
      return $this;
    }

}
