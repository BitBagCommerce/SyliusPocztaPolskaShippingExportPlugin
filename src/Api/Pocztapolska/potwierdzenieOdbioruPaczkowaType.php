<?php

class potwierdzenieOdbioruPaczkowaType
{

    /**
     * @var iloscPotwierdzenOdbioruType $ilosc
     */
    protected $ilosc = null;

    /**
     * @var sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType $sposob
     */
    protected $sposob = null;

    /**
     * @param iloscPotwierdzenOdbioruType $ilosc
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType $sposob
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
     * @return potwierdzenieOdbioruPaczkowaType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType
     */
    public function getSposob()
    {
      return $this->sposob;
    }

    /**
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType $sposob
     * @return potwierdzenieOdbioruPaczkowaType
     */
    public function setSposob($sposob)
    {
      $this->sposob = $sposob;
      return $this;
    }

}
