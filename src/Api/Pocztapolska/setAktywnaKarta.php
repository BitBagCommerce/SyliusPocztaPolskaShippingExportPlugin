<?php

class setAktywnaKarta
{

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @param int $idKarta
     */
    public function __construct($idKarta)
    {
      $this->idKarta = $idKarta;
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
     * @return setAktywnaKarta
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

}
