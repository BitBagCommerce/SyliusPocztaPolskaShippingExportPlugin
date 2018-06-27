<?php

class addOdwolanieDoReklamacji
{

    /**
     * @var reklamowanaPrzesylkaType $reklamacja
     */
    protected $reklamacja = null;

    /**
     * @param reklamowanaPrzesylkaType $reklamacja
     */
    public function __construct($reklamacja)
    {
      $this->reklamacja = $reklamacja;
    }

    /**
     * @return reklamowanaPrzesylkaType
     */
    public function getReklamacja()
    {
      return $this->reklamacja;
    }

    /**
     * @param reklamowanaPrzesylkaType $reklamacja
     * @return addOdwolanieDoReklamacji
     */
    public function setReklamacja($reklamacja)
    {
      $this->reklamacja = $reklamacja;
      return $this;
    }

}
