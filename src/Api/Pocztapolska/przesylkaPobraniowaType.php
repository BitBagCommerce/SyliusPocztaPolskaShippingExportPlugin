<?php

class przesylkaPobraniowaType extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var gabarytType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

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
     * @param boolean $posteRestante
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param kategoriaType $kategoria
     * @param gabarytType $gabaryt
     * @param boolean $ostroznie
     * @param wartoscType $wartosc
     * @param masaType $masa
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $posteRestante, $iloscPotwierdzenOdbioru, $kategoria, $gabaryt, $ostroznie, $wartosc, $masa)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->posteRestante = $posteRestante;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->kategoria = $kategoria;
      $this->gabaryt = $gabaryt;
      $this->ostroznie = $ostroznie;
      $this->wartosc = $wartosc;
      $this->masa = $masa;
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
     * @return przesylkaPobraniowaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPosteRestante()
    {
      return $this->posteRestante;
    }

    /**
     * @param boolean $posteRestante
     * @return przesylkaPobraniowaType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
      return $this;
    }

    /**
     * @return iloscPotwierdzenOdbioruType
     */
    public function getIloscPotwierdzenOdbioru()
    {
      return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @return przesylkaPobraniowaType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      return $this;
    }

    /**
     * @return kategoriaType
     */
    public function getKategoria()
    {
      return $this->kategoria;
    }

    /**
     * @param kategoriaType $kategoria
     * @return przesylkaPobraniowaType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

    /**
     * @return gabarytType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytType $gabaryt
     * @return przesylkaPobraniowaType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
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
     * @return przesylkaPobraniowaType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
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
     * @return przesylkaPobraniowaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
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
     * @return przesylkaPobraniowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

}
