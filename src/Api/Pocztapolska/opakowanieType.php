<?php

class opakowanieType
{

    /**
     * @var guidType $opakowanieGuid
     */
    protected $opakowanieGuid = null;

    /**
     * @var typOpakowanieType $typ
     */
    protected $typ = null;

    /**
     * @var string $sygnatura
     */
    protected $sygnatura = null;

    /**
     * @var int $ilosc
     */
    protected $ilosc = null;

    /**
     * @var string $numerOpakowaniaZbiorczego
     */
    protected $numerOpakowaniaZbiorczego = null;

    /**
     * @param guidType $opakowanieGuid
     * @param typOpakowanieType $typ
     * @param string $sygnatura
     * @param int $ilosc
     * @param string $numerOpakowaniaZbiorczego
     */
    public function __construct($opakowanieGuid, $typ, $sygnatura, $ilosc, $numerOpakowaniaZbiorczego)
    {
      $this->opakowanieGuid = $opakowanieGuid;
      $this->typ = $typ;
      $this->sygnatura = $sygnatura;
      $this->ilosc = $ilosc;
      $this->numerOpakowaniaZbiorczego = $numerOpakowaniaZbiorczego;
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
     * @return opakowanieType
     */
    public function setOpakowanieGuid($opakowanieGuid)
    {
      $this->opakowanieGuid = $opakowanieGuid;
      return $this;
    }

    /**
     * @return typOpakowanieType
     */
    public function getTyp()
    {
      return $this->typ;
    }

    /**
     * @param typOpakowanieType $typ
     * @return opakowanieType
     */
    public function setTyp($typ)
    {
      $this->typ = $typ;
      return $this;
    }

    /**
     * @return string
     */
    public function getSygnatura()
    {
      return $this->sygnatura;
    }

    /**
     * @param string $sygnatura
     * @return opakowanieType
     */
    public function setSygnatura($sygnatura)
    {
      $this->sygnatura = $sygnatura;
      return $this;
    }

    /**
     * @return int
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param int $ilosc
     * @return opakowanieType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerOpakowaniaZbiorczego()
    {
      return $this->numerOpakowaniaZbiorczego;
    }

    /**
     * @param string $numerOpakowaniaZbiorczego
     * @return opakowanieType
     */
    public function setNumerOpakowaniaZbiorczego($numerOpakowaniaZbiorczego)
    {
      $this->numerOpakowaniaZbiorczego = $numerOpakowaniaZbiorczego;
      return $this;
    }

}
