<?php

class przesylkaEZwrotPocztexType extends przesylkaRejestrowanaType
{

    /**
     * @var numerNadaniaType $numerNadaniaZwrot
     */
    protected $numerNadaniaZwrot = null;

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
     * @param numerNadaniaType $numerNadaniaZwrot
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $numerNadaniaZwrot)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->numerNadaniaZwrot = $numerNadaniaZwrot;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadaniaZwrot()
    {
      return $this->numerNadaniaZwrot;
    }

    /**
     * @param numerNadaniaType $numerNadaniaZwrot
     * @return przesylkaEZwrotPocztexType
     */
    public function setNumerNadaniaZwrot($numerNadaniaZwrot)
    {
      $this->numerNadaniaZwrot = $numerNadaniaZwrot;
      return $this;
    }

}
