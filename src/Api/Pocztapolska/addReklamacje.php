<?php

class addReklamacje
{

    /**
     * @var reklamowanaPrzesylkaType $reklamowanaPrzesylka
     */
    protected $reklamowanaPrzesylka = null;

    /**
     * @param reklamowanaPrzesylkaType $reklamowanaPrzesylka
     */
    public function __construct($reklamowanaPrzesylka)
    {
      $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;
    }

    /**
     * @return reklamowanaPrzesylkaType
     */
    public function getReklamowanaPrzesylka()
    {
      return $this->reklamowanaPrzesylka;
    }

    /**
     * @param reklamowanaPrzesylkaType $reklamowanaPrzesylka
     * @return addReklamacje
     */
    public function setReklamowanaPrzesylka($reklamowanaPrzesylka)
    {
      $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;
      return $this;
    }

}
