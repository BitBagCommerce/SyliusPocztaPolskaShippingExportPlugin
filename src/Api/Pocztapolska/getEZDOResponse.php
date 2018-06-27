<?php

class getEZDOResponse
{

    /**
     * @var adresType $adres
     */
    protected $adres = null;

    /**
     * @var EZDOPrzesylkaType $przesylka
     */
    protected $przesylka = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @var string $numerKD
     */
    protected $numerKD = null;

    /**
     * @var string $numerEZDO
     */
    protected $numerEZDO = null;

    /**
     * @param adresType $adres
     * @param EZDOPrzesylkaType $przesylka
     * @param errorType $error
     * @param string $numerKD
     * @param string $numerEZDO
     */
    public function __construct($adres, $przesylka, $error, $numerKD, $numerEZDO)
    {
      $this->adres = $adres;
      $this->przesylka = $przesylka;
      $this->error = $error;
      $this->numerKD = $numerKD;
      $this->numerEZDO = $numerEZDO;
    }

    /**
     * @return adresType
     */
    public function getAdres()
    {
      return $this->adres;
    }

    /**
     * @param adresType $adres
     * @return getEZDOResponse
     */
    public function setAdres($adres)
    {
      $this->adres = $adres;
      return $this;
    }

    /**
     * @return EZDOPrzesylkaType
     */
    public function getPrzesylka()
    {
      return $this->przesylka;
    }

    /**
     * @param EZDOPrzesylkaType $przesylka
     * @return getEZDOResponse
     */
    public function setPrzesylka($przesylka)
    {
      $this->przesylka = $przesylka;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return getEZDOResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerKD()
    {
      return $this->numerKD;
    }

    /**
     * @param string $numerKD
     * @return getEZDOResponse
     */
    public function setNumerKD($numerKD)
    {
      $this->numerKD = $numerKD;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerEZDO()
    {
      return $this->numerEZDO;
    }

    /**
     * @param string $numerEZDO
     * @return getEZDOResponse
     */
    public function setNumerEZDO($numerEZDO)
    {
      $this->numerEZDO = $numerEZDO;
      return $this;
    }

}
