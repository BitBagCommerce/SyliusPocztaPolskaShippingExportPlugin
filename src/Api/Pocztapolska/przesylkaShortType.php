<?php

class przesylkaShortType
{

    /**
     * @var czynnoscUpustowaType[] $czynnosciUpustowe
     */
    protected $czynnosciUpustowe = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var date $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @var int $razem
     */
    protected $razem = null;

    /**
     * @var int $pobranie
     */
    protected $pobranie = null;

    /**
     * @var statusType $status
     */
    protected $status = null;

    /**
     * @param numerNadaniaType $numerNadania
     * @param guidType $guid
     * @param date $dataNadania
     * @param int $razem
     * @param int $pobranie
     * @param statusType $status
     */
    public function __construct($numerNadania, $guid, $dataNadania, $razem, $pobranie, $status)
    {
      $this->numerNadania = $numerNadania;
      $this->guid = $guid;
      $this->dataNadania = $dataNadania;
      $this->razem = $razem;
      $this->pobranie = $pobranie;
      $this->status = $status;
    }

    /**
     * @return czynnoscUpustowaType[]
     */
    public function getCzynnosciUpustowe()
    {
      return $this->czynnosciUpustowe;
    }

    /**
     * @param czynnoscUpustowaType[] $czynnosciUpustowe
     * @return przesylkaShortType
     */
    public function setCzynnosciUpustowe(array $czynnosciUpustowe = null)
    {
      $this->czynnosciUpustowe = $czynnosciUpustowe;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadania()
    {
      return $this->numerNadania;
    }

    /**
     * @param numerNadaniaType $numerNadania
     * @return przesylkaShortType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
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
     * @return przesylkaShortType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataNadania()
    {
      return $this->dataNadania;
    }

    /**
     * @param date $dataNadania
     * @return przesylkaShortType
     */
    public function setDataNadania($dataNadania)
    {
      $this->dataNadania = $dataNadania;
      return $this;
    }

    /**
     * @return int
     */
    public function getRazem()
    {
      return $this->razem;
    }

    /**
     * @param int $razem
     * @return przesylkaShortType
     */
    public function setRazem($razem)
    {
      $this->razem = $razem;
      return $this;
    }

    /**
     * @return int
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param int $pobranie
     * @return przesylkaShortType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return statusType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusType $status
     * @return przesylkaShortType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
