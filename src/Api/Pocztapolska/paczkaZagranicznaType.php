<?php

class paczkaZagranicznaType extends przesylkaRejestrowanaType
{

    /**
     * @var zwrotType $zwrot
     */
    protected $zwrot = null;

    /**
     * @var deklaracjaCelnaType $deklaracjaCelna
     */
    protected $deklaracjaCelna = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var boolean $utrudnionaManipulacja
     */
    protected $utrudnionaManipulacja = null;

    /**
     * @var boolean $ekspres
     */
    protected $ekspres = null;

    /**
     * @var string $numerReferencyjnyCelny
     */
    protected $numerReferencyjnyCelny = null;

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
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param kategoriaType $kategoria
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param boolean $utrudnionaManipulacja
     * @param boolean $ekspres
     * @param string $numerReferencyjnyCelny
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $posteRestante, $masa, $wartosc, $kategoria, $iloscPotwierdzenOdbioru, $utrudnionaManipulacja, $ekspres, $numerReferencyjnyCelny)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->posteRestante = $posteRestante;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->kategoria = $kategoria;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->utrudnionaManipulacja = $utrudnionaManipulacja;
      $this->ekspres = $ekspres;
      $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
    }

    /**
     * @return zwrotType
     */
    public function getZwrot()
    {
      return $this->zwrot;
    }

    /**
     * @param zwrotType $zwrot
     * @return paczkaZagranicznaType
     */
    public function setZwrot($zwrot)
    {
      $this->zwrot = $zwrot;
      return $this;
    }

    /**
     * @return deklaracjaCelnaType
     */
    public function getDeklaracjaCelna()
    {
      return $this->deklaracjaCelna;
    }

    /**
     * @param deklaracjaCelnaType $deklaracjaCelna
     * @return paczkaZagranicznaType
     */
    public function setDeklaracjaCelna($deklaracjaCelna)
    {
      $this->deklaracjaCelna = $deklaracjaCelna;
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
     * @return paczkaZagranicznaType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
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
     * @return paczkaZagranicznaType
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
     * @return paczkaZagranicznaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
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
     * @return paczkaZagranicznaType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
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
     * @return paczkaZagranicznaType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUtrudnionaManipulacja()
    {
      return $this->utrudnionaManipulacja;
    }

    /**
     * @param boolean $utrudnionaManipulacja
     * @return paczkaZagranicznaType
     */
    public function setUtrudnionaManipulacja($utrudnionaManipulacja)
    {
      $this->utrudnionaManipulacja = $utrudnionaManipulacja;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEkspres()
    {
      return $this->ekspres;
    }

    /**
     * @param boolean $ekspres
     * @return paczkaZagranicznaType
     */
    public function setEkspres($ekspres)
    {
      $this->ekspres = $ekspres;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerReferencyjnyCelny()
    {
      return $this->numerReferencyjnyCelny;
    }

    /**
     * @param string $numerReferencyjnyCelny
     * @return paczkaZagranicznaType
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny)
    {
      $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
      return $this;
    }

}
