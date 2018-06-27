<?php

class getPlacowkiPocztoweResponse
{

    /**
     * @var placowkaPocztowaType $placowka
     */
    protected $placowka = null;

    /**
     * @param placowkaPocztowaType $placowka
     */
    public function __construct($placowka)
    {
      $this->placowka = $placowka;
    }

    /**
     * @return placowkaPocztowaType
     */
    public function getPlacowka()
    {
      return $this->placowka;
    }

    /**
     * @param placowkaPocztowaType $placowka
     * @return getPlacowkiPocztoweResponse
     */
    public function setPlacowka($placowka)
    {
      $this->placowka = $placowka;
      return $this;
    }

}
