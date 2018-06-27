<?php

abstract class przesylkaRejestrowanaType extends przesylkaType
{

    /**
     * @var adresType $adres
     */
    protected $adres = null;

    /**
     * @var adresType $nadawca
     */
    protected $nadawca = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var sygnaturaType $sygnatura
     */
    protected $sygnatura = null;

    /**
     * @var terminType $terminSprawy
     */
    protected $terminSprawy = null;

    /**
     * @var rodzajType $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     * @param sygnaturaType $sygnatura
     * @param terminType $terminSprawy
     * @param rodzajType $rodzaj
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->adres = $adres;
      $this->numerNadania = $numerNadania;
      $this->sygnatura = $sygnatura;
      $this->terminSprawy = $terminSprawy;
      $this->rodzaj = $rodzaj;
    }

    /**
     * @return adresType
     */
    public function getAdres()
    {
      return $this->adres;
    }

    /**
     * @param adresType $adres
     * @return przesylkaRejestrowanaType
     */
    public function setAdres($adres)
    {
      $this->adres = $adres;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getNadawca()
    {
      return $this->nadawca;
    }

    /**
     * @param adresType $nadawca
     * @return przesylkaRejestrowanaType
     */
    public function setNadawca($nadawca)
    {
      $this->nadawca = $nadawca;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadania()
    {
      return $this->numerNadania;
    }

    /**
     * @param numerNadaniaType $numerNadania
     * @return przesylkaRejestrowanaType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return sygnaturaType
     */
    public function getSygnatura()
    {
      return $this->sygnatura;
    }

    /**
     * @param sygnaturaType $sygnatura
     * @return przesylkaRejestrowanaType
     */
    public function setSygnatura($sygnatura)
    {
      $this->sygnatura = $sygnatura;
      return $this;
    }

    /**
     * @return terminType
     */
    public function getTerminSprawy()
    {
      return $this->terminSprawy;
    }

    /**
     * @param terminType $terminSprawy
     * @return przesylkaRejestrowanaType
     */
    public function setTerminSprawy($terminSprawy)
    {
      $this->terminSprawy = $terminSprawy;
      return $this;
    }

    /**
     * @return rodzajType
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param rodzajType $rodzaj
     * @return przesylkaRejestrowanaType
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
    }

}
