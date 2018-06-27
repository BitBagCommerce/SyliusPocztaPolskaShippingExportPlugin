<?php

abstract class przesylkaNieRejestrowanaType extends przesylkaType
{

    /**
     * @var anonymous97 $ilosc
     */
    protected $ilosc = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param anonymous97 $ilosc
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->ilosc = $ilosc;
    }

    /**
     * @return anonymous97
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param anonymous97 $ilosc
     * @return przesylkaNieRejestrowanaType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

}
