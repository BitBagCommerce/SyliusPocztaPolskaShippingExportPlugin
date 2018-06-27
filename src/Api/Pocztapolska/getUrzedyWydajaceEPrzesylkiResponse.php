<?php

class getUrzedyWydajaceEPrzesylkiResponse
{

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @param urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    public function __construct($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
    }

    /**
     * @return urzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
      return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * @param urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return getUrzedyWydajaceEPrzesylkiResponse
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
    }

}
