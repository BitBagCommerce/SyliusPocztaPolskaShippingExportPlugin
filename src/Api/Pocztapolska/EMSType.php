<?php

class EMSType extends przesylkaRejestrowanaType
{

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var deklaracjaCelnaType $deklaracjaCelna
     */
    protected $deklaracjaCelna = null;

    /**
     * @var EMSTypOpakowaniaType $typOpakowania
     */
    protected $typOpakowania = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $zalaczoneDokumenty
     */
    protected $zalaczoneDokumenty = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     * @param sygnaturaType $sygnatura
     * @param terminType $terminSprawy
     * @param rodzajType $rodzaj
     * @param EMSTypOpakowaniaType $typOpakowania
     * @param masaType $masa
     * @param boolean $zalaczoneDokumenty
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $typOpakowania, $masa, $zalaczoneDokumenty)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->typOpakowania = $typOpakowania;
      $this->masa = $masa;
      $this->zalaczoneDokumenty = $zalaczoneDokumenty;
    }

    /**
     * @return ubezpieczenieType
     */
    public function getUbezpieczenie()
    {
      return $this->ubezpieczenie;
    }

    /**
     * @param ubezpieczenieType $ubezpieczenie
     * @return EMSType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return deklaracjaCelnaType
     */
    public function getDeklaracjaCelna()
    {
      return $this->deklaracjaCelna;
    }

    /**
     * @param deklaracjaCelnaType $deklaracjaCelna
     * @return EMSType
     */
    public function setDeklaracjaCelna($deklaracjaCelna)
    {
      $this->deklaracjaCelna = $deklaracjaCelna;
      return $this;
    }

    /**
     * @return EMSTypOpakowaniaType
     */
    public function getTypOpakowania()
    {
      return $this->typOpakowania;
    }

    /**
     * @param EMSTypOpakowaniaType $typOpakowania
     * @return EMSType
     */
    public function setTypOpakowania($typOpakowania)
    {
      $this->typOpakowania = $typOpakowania;
      return $this;
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
     * @return EMSType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZalaczoneDokumenty()
    {
      return $this->zalaczoneDokumenty;
    }

    /**
     * @param boolean $zalaczoneDokumenty
     * @return EMSType
     */
    public function setZalaczoneDokumenty($zalaczoneDokumenty)
    {
      $this->zalaczoneDokumenty = $zalaczoneDokumenty;
      return $this;
    }

}
