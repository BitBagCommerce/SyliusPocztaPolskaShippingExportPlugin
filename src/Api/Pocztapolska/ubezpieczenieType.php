<?php

class ubezpieczenieType
{

    /**
     * @var rodzajUbezpieczeniaType $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var kwotaUbezpieczeniaType $kwota
     */
    protected $kwota = null;

    /**
     * @param rodzajUbezpieczeniaType $rodzaj
     * @param kwotaUbezpieczeniaType $kwota
     */
    public function __construct($rodzaj, $kwota)
    {
      $this->rodzaj = $rodzaj;
      $this->kwota = $kwota;
    }

    /**
     * @return rodzajUbezpieczeniaType
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param rodzajUbezpieczeniaType $rodzaj
     * @return ubezpieczenieType
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
    }

    /**
     * @return kwotaUbezpieczeniaType
     */
    public function getKwota()
    {
      return $this->kwota;
    }

    /**
     * @param kwotaUbezpieczeniaType $kwota
     * @return ubezpieczenieType
     */
    public function setKwota($kwota)
    {
      $this->kwota = $kwota;
      return $this;
    }

}
