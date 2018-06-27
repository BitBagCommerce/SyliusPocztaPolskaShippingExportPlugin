<?php

class trasaResponseType
{

    /**
     * @var boolean $isMiejscowa
     */
    protected $isMiejscowa = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param boolean $isMiejscowa
     * @param guidType $guid
     */
    public function __construct($isMiejscowa, $guid)
    {
      $this->isMiejscowa = $isMiejscowa;
      $this->guid = $guid;
    }

    /**
     * @return boolean
     */
    public function getIsMiejscowa()
    {
      return $this->isMiejscowa;
    }

    /**
     * @param boolean $isMiejscowa
     * @return trasaResponseType
     */
    public function setIsMiejscowa($isMiejscowa)
    {
      $this->isMiejscowa = $isMiejscowa;
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
     * @return trasaResponseType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
