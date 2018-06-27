<?php

class trasaRequestType
{

    /**
     * @var urzadNadaniaType $fromUrzadNadania
     */
    protected $fromUrzadNadania = null;

    /**
     * @var kodPocztowyType $toKodPocztowy
     */
    protected $toKodPocztowy = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param urzadNadaniaType $fromUrzadNadania
     * @param kodPocztowyType $toKodPocztowy
     * @param guidType $guid
     */
    public function __construct($fromUrzadNadania, $toKodPocztowy, $guid)
    {
      $this->fromUrzadNadania = $fromUrzadNadania;
      $this->toKodPocztowy = $toKodPocztowy;
      $this->guid = $guid;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getFromUrzadNadania()
    {
      return $this->fromUrzadNadania;
    }

    /**
     * @param urzadNadaniaType $fromUrzadNadania
     * @return trasaRequestType
     */
    public function setFromUrzadNadania($fromUrzadNadania)
    {
      $this->fromUrzadNadania = $fromUrzadNadania;
      return $this;
    }

    /**
     * @return kodPocztowyType
     */
    public function getToKodPocztowy()
    {
      return $this->toKodPocztowy;
    }

    /**
     * @param kodPocztowyType $toKodPocztowy
     * @return trasaRequestType
     */
    public function setToKodPocztowy($toKodPocztowy)
    {
      $this->toKodPocztowy = $toKodPocztowy;
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
     * @return trasaRequestType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
