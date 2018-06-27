<?php

class getKartyResponse
{

    /**
     * @var kartaType $karta
     */
    protected $karta = null;

    /**
     * @param kartaType $karta
     */
    public function __construct($karta)
    {
      $this->karta = $karta;
    }

    /**
     * @return kartaType
     */
    public function getKarta()
    {
      return $this->karta;
    }

    /**
     * @param kartaType $karta
     * @return getKartyResponse
     */
    public function setKarta($karta)
    {
      $this->karta = $karta;
      return $this;
    }

}
