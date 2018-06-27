<?php

class EPOInfoType
{

    /**
     * @var awizoPrzesylkiType $awizoPrzesylki
     */
    protected $awizoPrzesylki = null;

    /**
     * @var doreczeniePrzesylkiType $doreczeniePrzesylki
     */
    protected $doreczeniePrzesylki = null;

    /**
     * @var zwrotPrzesylkiType $zwrotPrzesylki
     */
    protected $zwrotPrzesylki = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return awizoPrzesylkiType
     */
    public function getAwizoPrzesylki()
    {
      return $this->awizoPrzesylki;
    }

    /**
     * @param awizoPrzesylkiType $awizoPrzesylki
     * @return EPOInfoType
     */
    public function setAwizoPrzesylki($awizoPrzesylki)
    {
      $this->awizoPrzesylki = $awizoPrzesylki;
      return $this;
    }

    /**
     * @return doreczeniePrzesylkiType
     */
    public function getDoreczeniePrzesylki()
    {
      return $this->doreczeniePrzesylki;
    }

    /**
     * @param doreczeniePrzesylkiType $doreczeniePrzesylki
     * @return EPOInfoType
     */
    public function setDoreczeniePrzesylki($doreczeniePrzesylki)
    {
      $this->doreczeniePrzesylki = $doreczeniePrzesylki;
      return $this;
    }

    /**
     * @return zwrotPrzesylkiType
     */
    public function getZwrotPrzesylki()
    {
      return $this->zwrotPrzesylki;
    }

    /**
     * @param zwrotPrzesylkiType $zwrotPrzesylki
     * @return EPOInfoType
     */
    public function setZwrotPrzesylki($zwrotPrzesylki)
    {
      $this->zwrotPrzesylki = $zwrotPrzesylki;
      return $this;
    }

}
