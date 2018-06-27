<?php

class przesylkaPoleconaKrajowaType extends przesylkaRejestrowanaType
{

    /**
     * @var EPOType $epo
     */
    protected $epo = null;

    /**
     * @var zasadySpecjalneEnum $zasadySpecjalne
     */
    protected $zasadySpecjalne = null;

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
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $egzemplarzBiblioteczny
     */
    protected $egzemplarzBiblioteczny = null;

    /**
     * @var boolean $dlaOciemnialych
     */
    protected $dlaOciemnialych = null;

    /**
     * @var boolean $obszarMiasto
     */
    protected $obszarMiasto = null;

    /**
     * @var boolean $miejscowa
     */
    protected $miejscowa = null;

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
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @param boolean $posteRestante
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param kategoriaType $kategoria
     * @param gabarytType $gabaryt
     * @param masaType $masa
     * @param boolean $egzemplarzBiblioteczny
     * @param boolean $dlaOciemnialych
     * @param boolean $obszarMiasto
     * @param boolean $miejscowa
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $zasadySpecjalne, $posteRestante, $iloscPotwierdzenOdbioru, $kategoria, $gabaryt, $masa, $egzemplarzBiblioteczny, $dlaOciemnialych, $obszarMiasto, $miejscowa)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->zasadySpecjalne = $zasadySpecjalne;
      $this->posteRestante = $posteRestante;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->kategoria = $kategoria;
      $this->gabaryt = $gabaryt;
      $this->masa = $masa;
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
      $this->dlaOciemnialych = $dlaOciemnialych;
      $this->obszarMiasto = $obszarMiasto;
      $this->miejscowa = $miejscowa;
    }

    /**
     * @return EPOType
     */
    public function getEpo()
    {
      return $this->epo;
    }

    /**
     * @param EPOType $epo
     * @return przesylkaPoleconaKrajowaType
     */
    public function setEpo($epo)
    {
      $this->epo = $epo;
      return $this;
    }

    /**
     * @return zasadySpecjalneEnum
     */
    public function getZasadySpecjalne()
    {
      return $this->zasadySpecjalne;
    }

    /**
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @return przesylkaPoleconaKrajowaType
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
      $this->zasadySpecjalne = $zasadySpecjalne;
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
     * @return przesylkaPoleconaKrajowaType
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
     * @return przesylkaPoleconaKrajowaType
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
     * @return przesylkaPoleconaKrajowaType
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
     * @return przesylkaPoleconaKrajowaType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
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
     * @return przesylkaPoleconaKrajowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEgzemplarzBiblioteczny()
    {
      return $this->egzemplarzBiblioteczny;
    }

    /**
     * @param boolean $egzemplarzBiblioteczny
     * @return przesylkaPoleconaKrajowaType
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
    {
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDlaOciemnialych()
    {
      return $this->dlaOciemnialych;
    }

    /**
     * @param boolean $dlaOciemnialych
     * @return przesylkaPoleconaKrajowaType
     */
    public function setDlaOciemnialych($dlaOciemnialych)
    {
      $this->dlaOciemnialych = $dlaOciemnialych;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getObszarMiasto()
    {
      return $this->obszarMiasto;
    }

    /**
     * @param boolean $obszarMiasto
     * @return przesylkaPoleconaKrajowaType
     */
    public function setObszarMiasto($obszarMiasto)
    {
      $this->obszarMiasto = $obszarMiasto;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMiejscowa()
    {
      return $this->miejscowa;
    }

    /**
     * @param boolean $miejscowa
     * @return przesylkaPoleconaKrajowaType
     */
    public function setMiejscowa($miejscowa)
    {
      $this->miejscowa = $miejscowa;
      return $this;
    }

}
