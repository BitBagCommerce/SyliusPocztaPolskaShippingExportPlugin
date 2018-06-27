<?php

class wspolrzednaGeograficznaType
{

    /**
     * @var float $dec
     */
    protected $dec = null;

    /**
     * @var int $stopien
     */
    protected $stopien = null;

    /**
     * @var int $minuta
     */
    protected $minuta = null;

    /**
     * @var float $sekunda
     */
    protected $sekunda = null;

    /**
     * @param float $dec
     * @param int $stopien
     * @param int $minuta
     * @param float $sekunda
     */
    public function __construct($dec, $stopien, $minuta, $sekunda)
    {
      $this->dec = $dec;
      $this->stopien = $stopien;
      $this->minuta = $minuta;
      $this->sekunda = $sekunda;
    }

    /**
     * @return float
     */
    public function getDec()
    {
      return $this->dec;
    }

    /**
     * @param float $dec
     * @return wspolrzednaGeograficznaType
     */
    public function setDec($dec)
    {
      $this->dec = $dec;
      return $this;
    }

    /**
     * @return int
     */
    public function getStopien()
    {
      return $this->stopien;
    }

    /**
     * @param int $stopien
     * @return wspolrzednaGeograficznaType
     */
    public function setStopien($stopien)
    {
      $this->stopien = $stopien;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinuta()
    {
      return $this->minuta;
    }

    /**
     * @param int $minuta
     * @return wspolrzednaGeograficznaType
     */
    public function setMinuta($minuta)
    {
      $this->minuta = $minuta;
      return $this;
    }

    /**
     * @return float
     */
    public function getSekunda()
    {
      return $this->sekunda;
    }

    /**
     * @param float $sekunda
     * @return wspolrzednaGeograficznaType
     */
    public function setSekunda($sekunda)
    {
      $this->sekunda = $sekunda;
      return $this;
    }

}
