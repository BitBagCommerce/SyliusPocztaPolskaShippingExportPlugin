<?php

class subPrzesylkaPaletowaType extends przesylkaType
{

    /**
     * @var paletaType $paleta
     */
    protected $paleta = null;

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param paletaType $paleta
     * @param string $zawartosc
     * @param masaType $masa
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $paleta, $zawartosc, $masa)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->paleta = $paleta;
      $this->zawartosc = $zawartosc;
      $this->masa = $masa;
    }

    /**
     * @return paletaType
     */
    public function getPaleta()
    {
      return $this->paleta;
    }

    /**
     * @param paletaType $paleta
     * @return subPrzesylkaPaletowaType
     */
    public function setPaleta($paleta)
    {
      $this->paleta = $paleta;
      return $this;
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
     * @return subPrzesylkaPaletowaType
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
      return $this;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return subPrzesylkaPaletowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

}
