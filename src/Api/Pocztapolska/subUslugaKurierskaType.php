<?php

class subUslugaKurierskaType extends przesylkaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

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
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var opakowanieKurierskaType $opakowanie
     */
    protected $opakowanie = null;

    /**
     * @var boolean $ponadgabaryt
     */
    protected $ponadgabaryt = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param pobranieType $pobranie
     * @param ubezpieczenieType $ubezpieczenie
     * @param numerNadaniaType $numerNadania
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param boolean $ostroznie
     * @param opakowanieKurierskaType $opakowanie
     * @param boolean $ponadgabaryt
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $pobranie, $ubezpieczenie, $numerNadania, $masa, $wartosc, $ostroznie, $opakowanie, $ponadgabaryt, $numerPrzesylkiKlienta)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->pobranie = $pobranie;
      $this->ubezpieczenie = $ubezpieczenie;
      $this->numerNadania = $numerNadania;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->ostroznie = $ostroznie;
      $this->opakowanie = $opakowanie;
      $this->ponadgabaryt = $ponadgabaryt;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
    }

    /**
     * @return pobranieType
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param pobranieType $pobranie
     * @return subUslugaKurierskaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
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
     * @return subUslugaKurierskaType
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
     * @return subUslugaKurierskaType
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
     * @return subUslugaKurierskaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
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
     * @return subUslugaKurierskaType
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
     * @return subUslugaKurierskaType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
      return $this;
    }

    /**
     * @return opakowanieKurierskaType
     */
    public function getOpakowanie()
    {
      return $this->opakowanie;
    }

    /**
     * @param opakowanieKurierskaType $opakowanie
     * @return subUslugaKurierskaType
     */
    public function setOpakowanie($opakowanie)
    {
      $this->opakowanie = $opakowanie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPonadgabaryt()
    {
      return $this->ponadgabaryt;
    }

    /**
     * @param boolean $ponadgabaryt
     * @return subUslugaKurierskaType
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
      $this->ponadgabaryt = $ponadgabaryt;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
      return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param string $numerPrzesylkiKlienta
     * @return subUslugaKurierskaType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

}
