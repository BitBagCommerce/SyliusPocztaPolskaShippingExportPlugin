<?php

class setEnvelopeBuforDataNadania
{

    /**
     * @var date $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @param date $dataNadania
     */
    public function __construct($dataNadania)
    {
      $this->dataNadania = $dataNadania;
    }

    /**
     * @return date
     */
    public function getDataNadania()
    {
      return $this->dataNadania;
    }

    /**
     * @param date $dataNadania
     * @return setEnvelopeBuforDataNadania
     */
    public function setDataNadania($dataNadania)
    {
      $this->dataNadania = $dataNadania;
      return $this;
    }

}
