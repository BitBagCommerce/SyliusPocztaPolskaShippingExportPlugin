<?php

class obszarAdresowyResponseType
{

    /**
     * @var boolean $isObszarMiasto
     */
    protected $isObszarMiasto = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param boolean $isObszarMiasto
     * @param guidType $guid
     */
    public function __construct($isObszarMiasto, $guid)
    {
      $this->isObszarMiasto = $isObszarMiasto;
      $this->guid = $guid;
    }

    /**
     * @return boolean
     */
    public function getIsObszarMiasto()
    {
      return $this->isObszarMiasto;
    }

    /**
     * @param boolean $isObszarMiasto
     * @return obszarAdresowyResponseType
     */
    public function setIsObszarMiasto($isObszarMiasto)
    {
      $this->isObszarMiasto = $isObszarMiasto;
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
     * @return obszarAdresowyResponseType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
