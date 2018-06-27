<?php

class isObszarMiasto
{

    /**
     * @var obszarAdresowyType $adres
     */
    protected $adres = null;

    /**
     * @param obszarAdresowyType $adres
     */
    public function __construct($adres)
    {
      $this->adres = $adres;
    }

    /**
     * @return obszarAdresowyType
     */
    public function getAdres()
    {
      return $this->adres;
    }

    /**
     * @param obszarAdresowyType $adres
     * @return isObszarMiasto
     */
    public function setAdres($adres)
    {
      $this->adres = $adres;
      return $this;
    }

}
