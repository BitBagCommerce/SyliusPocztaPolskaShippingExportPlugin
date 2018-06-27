<?php

class obszarAdresowyType
{

    /**
     * @var kodPocztowyType $kodPocztowy
     */
    protected $kodPocztowy = null;

    /**
     * @var miejscowoscType $miejscowosc
     */
    protected $miejscowosc = null;

    /**
     * @var ulicaType $ulica
     */
    protected $ulica = null;

    /**
     * @var numerDomuType $numerDomu
     */
    protected $numerDomu = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param kodPocztowyType $kodPocztowy
     * @param miejscowoscType $miejscowosc
     * @param ulicaType $ulica
     * @param numerDomuType $numerDomu
     * @param guidType $guid
     */
    public function __construct($kodPocztowy, $miejscowosc, $ulica, $numerDomu, $guid)
    {
      $this->kodPocztowy = $kodPocztowy;
      $this->miejscowosc = $miejscowosc;
      $this->ulica = $ulica;
      $this->numerDomu = $numerDomu;
      $this->guid = $guid;
    }

    /**
     * @return kodPocztowyType
     */
    public function getKodPocztowy()
    {
      return $this->kodPocztowy;
    }

    /**
     * @param kodPocztowyType $kodPocztowy
     * @return obszarAdresowyType
     */
    public function setKodPocztowy($kodPocztowy)
    {
      $this->kodPocztowy = $kodPocztowy;
      return $this;
    }

    /**
     * @return miejscowoscType
     */
    public function getMiejscowosc()
    {
      return $this->miejscowosc;
    }

    /**
     * @param miejscowoscType $miejscowosc
     * @return obszarAdresowyType
     */
    public function setMiejscowosc($miejscowosc)
    {
      $this->miejscowosc = $miejscowosc;
      return $this;
    }

    /**
     * @return ulicaType
     */
    public function getUlica()
    {
      return $this->ulica;
    }

    /**
     * @param ulicaType $ulica
     * @return obszarAdresowyType
     */
    public function setUlica($ulica)
    {
      $this->ulica = $ulica;
      return $this;
    }

    /**
     * @return numerDomuType
     */
    public function getNumerDomu()
    {
      return $this->numerDomu;
    }

    /**
     * @param numerDomuType $numerDomu
     * @return obszarAdresowyType
     */
    public function setNumerDomu($numerDomu)
    {
      $this->numerDomu = $numerDomu;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return obszarAdresowyType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
