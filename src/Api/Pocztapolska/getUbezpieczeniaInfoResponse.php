<?php

class getUbezpieczeniaInfoResponse
{

    /**
     * @var ubezpieczeniaInfoType $poziomyUbezpieczenia
     */
    protected $poziomyUbezpieczenia = null;

    /**
     * @param ubezpieczeniaInfoType $poziomyUbezpieczenia
     */
    public function __construct($poziomyUbezpieczenia)
    {
      $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;
    }

    /**
     * @return ubezpieczeniaInfoType
     */
    public function getPoziomyUbezpieczenia()
    {
      return $this->poziomyUbezpieczenia;
    }

    /**
     * @param ubezpieczeniaInfoType $poziomyUbezpieczenia
     * @return getUbezpieczeniaInfoResponse
     */
    public function setPoziomyUbezpieczenia($poziomyUbezpieczenia)
    {
      $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;
      return $this;
    }

}
