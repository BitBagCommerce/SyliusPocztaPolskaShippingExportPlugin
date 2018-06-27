<?php

class clearEnvelopeByGuids
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @param guidType $guid
     * @param int $idBufor
     */
    public function __construct($guid, $idBufor)
    {
      $this->guid = $guid;
      $this->idBufor = $idBufor;
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
     * @return clearEnvelopeByGuids
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
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
     * @return clearEnvelopeByGuids
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
    }

}
