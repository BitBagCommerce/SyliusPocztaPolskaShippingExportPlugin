<?php

class addShipment
{

    /**
     * @var przesylkaType $przesylki
     */
    protected $przesylki = null;

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @param przesylkaType $przesylki
     * @param int $idBufor
     */
    public function __construct($przesylki, $idBufor)
    {
      $this->przesylki = $przesylki;
      $this->idBufor = $idBufor;
    }

    /**
     * @return przesylkaType
     */
    public function getPrzesylki()
    {
      return $this->przesylki;
    }

    /**
     * @param przesylkaType $przesylki
     * @return addShipment
     */
    public function setPrzesylki($przesylki)
    {
      $this->przesylki = $przesylki;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdBufor()
    {
      return $this->idBufor;
    }

    /**
     * @param int $idBufor
     * @return addShipment
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
    }

}
