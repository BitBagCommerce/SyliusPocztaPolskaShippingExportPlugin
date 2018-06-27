<?php

class moveShipments
{

    /**
     * @var int $idBuforFrom
     */
    protected $idBuforFrom = null;

    /**
     * @var int $idBuforTo
     */
    protected $idBuforTo = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param int $idBuforFrom
     * @param int $idBuforTo
     * @param guidType $guid
     */
    public function __construct($idBuforFrom, $idBuforTo, $guid)
    {
      $this->idBuforFrom = $idBuforFrom;
      $this->idBuforTo = $idBuforTo;
      $this->guid = $guid;
    }

    /**
     * @return int
     */
    public function getIdBuforFrom()
    {
      return $this->idBuforFrom;
    }

    /**
     * @param int $idBuforFrom
     * @return moveShipments
     */
    public function setIdBuforFrom($idBuforFrom)
    {
      $this->idBuforFrom = $idBuforFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdBuforTo()
    {
      return $this->idBuforTo;
    }

    /**
     * @param int $idBuforTo
     * @return moveShipments
     */
    public function setIdBuforTo($idBuforTo)
    {
      $this->idBuforTo = $idBuforTo;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return moveShipments
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
