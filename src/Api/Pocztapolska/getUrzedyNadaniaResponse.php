<?php

class getUrzedyNadaniaResponse
{

    /**
     * @var urzadNadaniaFullType $urzedyNadania
     */
    protected $urzedyNadania = null;

    /**
     * @param urzadNadaniaFullType $urzedyNadania
     */
    public function __construct($urzedyNadania)
    {
      $this->urzedyNadania = $urzedyNadania;
    }

    /**
     * @return urzadNadaniaFullType
     */
    public function getUrzedyNadania()
    {
      return $this->urzedyNadania;
    }

    /**
     * @param urzadNadaniaFullType $urzedyNadania
     * @return getUrzedyNadaniaResponse
     */
    public function setUrzedyNadania($urzedyNadania)
    {
      $this->urzedyNadania = $urzedyNadania;
      return $this;
    }

}
