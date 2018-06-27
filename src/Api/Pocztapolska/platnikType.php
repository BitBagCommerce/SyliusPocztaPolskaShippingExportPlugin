<?php

class platnikType
{

    /**
     * @var uiszczaOplateType $uiszczaOplate
     */
    protected $uiszczaOplate = null;

    /**
     * @var adresType $adresPlatnika
     */
    protected $adresPlatnika = null;

    /**
     * @param uiszczaOplateType $uiszczaOplate
     * @param adresType $adresPlatnika
     */
    public function __construct($uiszczaOplate, $adresPlatnika)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      $this->adresPlatnika = $adresPlatnika;
    }

    /**
     * @return uiszczaOplateType
     */
    public function getUiszczaOplate()
    {
      return $this->uiszczaOplate;
    }

    /**
     * @param uiszczaOplateType $uiszczaOplate
     * @return platnikType
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getAdresPlatnika()
    {
      return $this->adresPlatnika;
    }

    /**
     * @param adresType $adresPlatnika
     * @return platnikType
     */
    public function setAdresPlatnika($adresPlatnika)
    {
      $this->adresPlatnika = $adresPlatnika;
      return $this;
    }

}
