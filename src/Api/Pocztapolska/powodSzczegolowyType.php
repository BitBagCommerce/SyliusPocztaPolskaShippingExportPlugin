<?php

class powodSzczegolowyType
{

    /**
     * @var int $idPowodSzczegolowy
     */
    protected $idPowodSzczegolowy = null;

    /**
     * @var string $powodSzczegolowyOpis
     */
    protected $powodSzczegolowyOpis = null;

    /**
     * @param int $idPowodSzczegolowy
     * @param string $powodSzczegolowyOpis
     */
    public function __construct($idPowodSzczegolowy, $powodSzczegolowyOpis)
    {
      $this->idPowodSzczegolowy = $idPowodSzczegolowy;
      $this->powodSzczegolowyOpis = $powodSzczegolowyOpis;
    }

    /**
     * @return int
     */
    public function getIdPowodSzczegolowy()
    {
      return $this->idPowodSzczegolowy;
    }

    /**
     * @param int $idPowodSzczegolowy
     * @return powodSzczegolowyType
     */
    public function setIdPowodSzczegolowy($idPowodSzczegolowy)
    {
      $this->idPowodSzczegolowy = $idPowodSzczegolowy;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowodSzczegolowyOpis()
    {
      return $this->powodSzczegolowyOpis;
    }

    /**
     * @param string $powodSzczegolowyOpis
     * @return powodSzczegolowyType
     */
    public function setPowodSzczegolowyOpis($powodSzczegolowyOpis)
    {
      $this->powodSzczegolowyOpis = $powodSzczegolowyOpis;
      return $this;
    }

}
