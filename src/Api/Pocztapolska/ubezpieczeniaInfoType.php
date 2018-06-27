<?php

class ubezpieczeniaInfoType
{

    /**
     * @var string $typPrzesylki
     */
    protected $typPrzesylki = null;

    /**
     * @var kwotaUbezpieczeniaType $kwota
     */
    protected $kwota = null;

    /**
     * @param string $typPrzesylki
     * @param kwotaUbezpieczeniaType $kwota
     */
    public function __construct($typPrzesylki, $kwota)
    {
      $this->typPrzesylki = $typPrzesylki;
      $this->kwota = $kwota;
    }

    /**
     * @return string
     */
    public function getTypPrzesylki()
    {
      return $this->typPrzesylki;
    }

    /**
     * @param string $typPrzesylki
     * @return ubezpieczeniaInfoType
     */
    public function setTypPrzesylki($typPrzesylki)
    {
      $this->typPrzesylki = $typPrzesylki;
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
     * @return ubezpieczeniaInfoType
     */
    public function setKwota($kwota)
    {
      $this->kwota = $kwota;
      return $this;
    }

}
