<?php

class listZwyklyType extends przesylkaNieRejestrowanaType
{

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

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
     * @param anonymous97 $ilosc
     * @param boolean $posteRestante
     * @param kategoriaType $kategoria
     * @param gabarytType $gabaryt
     * @param masaType $masa
     * @param boolean $egzemplarzBiblioteczny
     * @param boolean $dlaOciemnialych
     * @param boolean $obszarMiasto
     * @param boolean $miejscowa
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc, $posteRestante, $kategoria, $gabaryt, $masa, $egzemplarzBiblioteczny, $dlaOciemnialych, $obszarMiasto, $miejscowa)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc);
      $this->posteRestante = $posteRestante;
      $this->kategoria = $kategoria;
      $this->gabaryt = $gabaryt;
      $this->masa = $masa;
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
      $this->dlaOciemnialych = $dlaOciemnialych;
      $this->obszarMiasto = $obszarMiasto;
      $this->miejscowa = $miejscowa;
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
     * @return listZwyklyType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
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
     * @return listZwyklyType
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
     * @return listZwyklyType
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
     * @return listZwyklyType
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
     * @return listZwyklyType
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
     * @return listZwyklyType
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
     * @return listZwyklyType
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
     * @return listZwyklyType
     */
    public function setMiejscowa($miejscowa)
    {
      $this->miejscowa = $miejscowa;
      return $this;
    }

}
