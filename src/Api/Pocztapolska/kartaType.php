<?php

class kartaType
{

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var boolean $aktywna
     */
    protected $aktywna = null;

    /**
     * @param int $idKarta
     * @param string $opis
     * @param boolean $aktywna
     */
    public function __construct($idKarta, $opis, $aktywna)
    {
      $this->idKarta = $idKarta;
      $this->opis = $opis;
      $this->aktywna = $aktywna;
    }

    /**
     * @return int
     */
    public function getIdKarta()
    {
      return $this->idKarta;
    }

    /**
     * @param int $idKarta
     * @return kartaType
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param string $opis
     * @return kartaType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAktywna()
    {
      return $this->aktywna;
    }

    /**
     * @param boolean $aktywna
     * @return kartaType
     */
    public function setAktywna($aktywna)
    {
      $this->aktywna = $aktywna;
      return $this;
    }

}
