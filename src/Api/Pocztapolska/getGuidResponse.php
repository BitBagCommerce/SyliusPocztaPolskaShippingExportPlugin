<?php

class getGuidResponse
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param guidType $guid
     */
    public function __construct($guid)
    {
      $this->guid = $guid;
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
     * @return getGuidResponse
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
