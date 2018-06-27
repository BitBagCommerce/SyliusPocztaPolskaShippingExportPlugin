<?php

class reklamacjaInfoType
{

    /**
     * @var string $idReklamacja
     */
    protected $idReklamacja = null;

    /**
     * @var guidType $guidPrzesylki
     */
    protected $guidPrzesylki = null;

    /**
     * @param string $idReklamacja
     * @param guidType $guidPrzesylki
     */
    public function __construct($idReklamacja, $guidPrzesylki)
    {
      $this->idReklamacja = $idReklamacja;
      $this->guidPrzesylki = $guidPrzesylki;
    }

    /**
     * @return string
     */
    public function getIdReklamacja()
    {
      return $this->idReklamacja;
    }

    /**
     * @param string $idReklamacja
     * @return reklamacjaInfoType
     */
    public function setIdReklamacja($idReklamacja)
    {
      $this->idReklamacja = $idReklamacja;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuidPrzesylki()
    {
      return $this->guidPrzesylki;
    }

    /**
     * @param guidType $guidPrzesylki
     * @return reklamacjaInfoType
     */
    public function setGuidPrzesylki($guidPrzesylki)
    {
      $this->guidPrzesylki = $guidPrzesylki;
      return $this;
    }

}
