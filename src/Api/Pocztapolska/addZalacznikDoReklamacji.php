<?php

class addZalacznikDoReklamacji
{

    /**
     * @var string $idReklamacja
     */
    protected $idReklamacja = null;

    /**
     * @var zalacznikDoReklamacjiType $zalacznik
     */
    protected $zalacznik = null;

    /**
     * @param string $idReklamacja
     * @param zalacznikDoReklamacjiType $zalacznik
     */
    public function __construct($idReklamacja, $zalacznik)
    {
      $this->idReklamacja = $idReklamacja;
      $this->zalacznik = $zalacznik;
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
     * @return addZalacznikDoReklamacji
     */
    public function setIdReklamacja($idReklamacja)
    {
      $this->idReklamacja = $idReklamacja;
      return $this;
    }

    /**
     * @return zalacznikDoReklamacjiType
     */
    public function getZalacznik()
    {
      return $this->zalacznik;
    }

    /**
     * @param zalacznikDoReklamacjiType $zalacznik
     * @return addZalacznikDoReklamacji
     */
    public function setZalacznik($zalacznik)
    {
      $this->zalacznik = $zalacznik;
      return $this;
    }

}
