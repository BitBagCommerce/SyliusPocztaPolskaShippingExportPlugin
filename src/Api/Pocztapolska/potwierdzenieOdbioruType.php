<?php

class potwierdzenieOdbioruType
{

    /**
     * @var iloscPotwierdzenOdbioruType $ilosc
     */
    protected $ilosc = null;

    /**
     * @var sposobPrzekazaniaPotwierdzeniaOdbioruType $sposob
     */
    protected $sposob = null;

    /**
     * @param iloscPotwierdzenOdbioruType $ilosc
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruType $sposob
     */
    public function __construct($ilosc, $sposob)
    {
      $this->ilosc = $ilosc;
      $this->sposob = $sposob;
    }

    /**
     * @return iloscPotwierdzenOdbioruType
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param iloscPotwierdzenOdbioruType $ilosc
     * @return potwierdzenieOdbioruType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return sposobPrzekazaniaPotwierdzeniaOdbioruType
     */
    public function getSposob()
    {
      return $this->sposob;
    }

    /**
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruType $sposob
     * @return potwierdzenieOdbioruType
     */
    public function setSposob($sposob)
    {
      $this->sposob = $sposob;
      return $this;
    }

}
