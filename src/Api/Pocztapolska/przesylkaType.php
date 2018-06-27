<?php

abstract class przesylkaType
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var guidType $pakietGuid
     */
    protected $pakietGuid = null;

    /**
     * @var guidType $opakowanieGuid
     */
    protected $opakowanieGuid = null;

    /**
     * @var opisType $opis
     */
    protected $opis = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis)
    {
      $this->guid = $guid;
      $this->pakietGuid = $pakietGuid;
      $this->opakowanieGuid = $opakowanieGuid;
      $this->opis = $opis;
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
     * @return przesylkaType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getPakietGuid()
    {
      return $this->pakietGuid;
    }

    /**
     * @param guidType $pakietGuid
     * @return przesylkaType
     */
    public function setPakietGuid($pakietGuid)
    {
      $this->pakietGuid = $pakietGuid;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getOpakowanieGuid()
    {
      return $this->opakowanieGuid;
    }

    /**
     * @param guidType $opakowanieGuid
     * @return przesylkaType
     */
    public function setOpakowanieGuid($opakowanieGuid)
    {
      $this->opakowanieGuid = $opakowanieGuid;
      return $this;
    }

    /**
     * @return opisType
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param opisType $opis
     * @return przesylkaType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

}
