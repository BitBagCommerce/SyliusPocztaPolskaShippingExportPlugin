<?php

class getEPOStatus
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var boolean $endedOnly
     */
    protected $endedOnly = null;

    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * @var boolean $withBioepo
     */
    protected $withBioepo = null;

    /**
     * @param guidType $guid
     * @param boolean $endedOnly
     * @param int $idEnvelope
     * @param boolean $withBioepo
     */
    public function __construct($guid, $endedOnly, $idEnvelope, $withBioepo)
    {
      $this->guid = $guid;
      $this->endedOnly = $endedOnly;
      $this->idEnvelope = $idEnvelope;
      $this->withBioepo = $withBioepo;
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
     * @return getEPOStatus
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEndedOnly()
    {
      return $this->endedOnly;
    }

    /**
     * @param boolean $endedOnly
     * @return getEPOStatus
     */
    public function setEndedOnly($endedOnly)
    {
      $this->endedOnly = $endedOnly;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdEnvelope()
    {
      return $this->idEnvelope;
    }

    /**
     * @param int $idEnvelope
     * @return getEPOStatus
     */
    public function setIdEnvelope($idEnvelope)
    {
      $this->idEnvelope = $idEnvelope;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWithBioepo()
    {
      return $this->withBioepo;
    }

    /**
     * @param boolean $withBioepo
     * @return getEPOStatus
     */
    public function setWithBioepo($withBioepo)
    {
      $this->withBioepo = $withBioepo;
      return $this;
    }

}
