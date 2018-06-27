<?php

class getReklamacjeResponse
{

    /**
     * @var reklamacjaRozpatrzonaType $reklamacja
     */
    protected $reklamacja = null;

    /**
     * @param reklamacjaRozpatrzonaType $reklamacja
     */
    public function __construct($reklamacja)
    {
      $this->reklamacja = $reklamacja;
    }

    /**
     * @return reklamacjaRozpatrzonaType
     */
    public function getReklamacja()
    {
      return $this->reklamacja;
    }

    /**
     * @param reklamacjaRozpatrzonaType $reklamacja
     * @return getReklamacjeResponse
     */
    public function setReklamacja($reklamacja)
    {
      $this->reklamacja = $reklamacja;
      return $this;
    }

}
