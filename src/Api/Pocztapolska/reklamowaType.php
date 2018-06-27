<?php

class reklamowaType extends przesylkaNieRejestrowanaType
{

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var gabarytType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param anonymous97 $ilosc
     * @param masaType $masa
     * @param gabarytType $gabaryt
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc, $masa, $gabaryt)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc);
      $this->masa = $masa;
      $this->gabaryt = $gabaryt;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return reklamowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return gabarytType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytType $gabaryt
     * @return reklamowaType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
      return $this;
    }

}
