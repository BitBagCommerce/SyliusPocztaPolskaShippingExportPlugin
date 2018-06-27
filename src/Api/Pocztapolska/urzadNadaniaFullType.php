<?php

class urzadNadaniaFullType
{

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var string $nazwaWydruk
     */
    protected $nazwaWydruk = null;

    /**
     * @param urzadNadaniaType $urzadNadania
     * @param string $opis
     * @param string $nazwaWydruk
     */
    public function __construct($urzadNadania, $opis, $nazwaWydruk)
    {
      $this->urzadNadania = $urzadNadania;
      $this->opis = $opis;
      $this->nazwaWydruk = $nazwaWydruk;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getUrzadNadania()
    {
      return $this->urzadNadania;
    }

    /**
     * @param urzadNadaniaType $urzadNadania
     * @return urzadNadaniaFullType
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param string $opis
     * @return urzadNadaniaFullType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwaWydruk()
    {
      return $this->nazwaWydruk;
    }

    /**
     * @param string $nazwaWydruk
     * @return urzadNadaniaFullType
     */
    public function setNazwaWydruk($nazwaWydruk)
    {
      $this->nazwaWydruk = $nazwaWydruk;
      return $this;
    }

}
