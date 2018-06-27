<?php

class subPrzesylkaBiznesowaType extends przesylkaType
{

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var gabarytBiznesowaType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param numerNadaniaType $numerNadania
     * @param masaType $masa
     * @param gabarytBiznesowaType $gabaryt
     * @param wartoscType $wartosc
     * @param boolean $ostroznie
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $numerNadania, $masa, $gabaryt, $wartosc, $ostroznie)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->numerNadania = $numerNadania;
      $this->masa = $masa;
      $this->gabaryt = $gabaryt;
      $this->wartosc = $wartosc;
      $this->ostroznie = $ostroznie;
    }

    /**
     * @return ubezpieczenieType
     */
    public function getUbezpieczenie()
    {
      return $this->ubezpieczenie;
    }

    /**
     * @param ubezpieczenieType $ubezpieczenie
     * @return subPrzesylkaBiznesowaType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
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
     * @return subPrzesylkaBiznesowaType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
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
     * @return subPrzesylkaBiznesowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return gabarytBiznesowaType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytBiznesowaType $gabaryt
     * @return subPrzesylkaBiznesowaType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
      return $this;
    }

    /**
     * @return wartoscType
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param wartoscType $wartosc
     * @return subPrzesylkaBiznesowaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOstroznie()
    {
      return $this->ostroznie;
    }

    /**
     * @param boolean $ostroznie
     * @return subPrzesylkaBiznesowaType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
      return $this;
    }

}
