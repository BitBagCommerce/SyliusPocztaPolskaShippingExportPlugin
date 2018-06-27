<?php

class listZwyklyFirmowyType extends przesylkaNieRejestrowanaType
{

    /**
     * @var adresType $adres
     */
    protected $adres = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var boolean $miejscowa
     */
    protected $miejscowa = null;

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
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var gabarytType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param anonymous97 $ilosc
     * @param boolean $posteRestante
     * @param boolean $miejscowa
     * @param masaType $masa
     * @param boolean $egzemplarzBiblioteczny
     * @param boolean $dlaOciemnialych
     * @param boolean $obszarMiasto
     * @param kategoriaType $kategoria
     * @param gabarytType $gabaryt
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc, $posteRestante, $miejscowa, $masa, $egzemplarzBiblioteczny, $dlaOciemnialych, $obszarMiasto, $kategoria, $gabaryt)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc);
      $this->posteRestante = $posteRestante;
      $this->miejscowa = $miejscowa;
      $this->masa = $masa;
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
      $this->dlaOciemnialych = $dlaOciemnialych;
      $this->obszarMiasto = $obszarMiasto;
      $this->kategoria = $kategoria;
      $this->gabaryt = $gabaryt;
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
     * @return listZwyklyFirmowyType
     */
    public function setAdres($adres)
    {
      $this->adres = $adres;
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
     * @return listZwyklyFirmowyType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
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
     * @return listZwyklyFirmowyType
     */
    public function setMiejscowa($miejscowa)
    {
      $this->miejscowa = $miejscowa;
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
     * @return listZwyklyFirmowyType
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
     * @return listZwyklyFirmowyType
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
     * @return listZwyklyFirmowyType
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
     * @return listZwyklyFirmowyType
     */
    public function setObszarMiasto($obszarMiasto)
    {
      $this->obszarMiasto = $obszarMiasto;
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
     * @return listZwyklyFirmowyType
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
     * @return listZwyklyFirmowyType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
      return $this;
    }

}
