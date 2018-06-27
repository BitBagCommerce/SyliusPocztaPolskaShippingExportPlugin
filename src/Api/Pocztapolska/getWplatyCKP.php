<?php

class getWplatyCKP
{

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $stopDate
     */
    protected $stopDate = null;

    /**
     * @param numerNadaniaType $numerNadania
     * @param date $startDate
     * @param date $stopDate
     */
    public function __construct($numerNadania, $startDate, $stopDate)
    {
      $this->numerNadania = $numerNadania;
      $this->startDate = $startDate;
      $this->stopDate = $stopDate;
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
     * @return getWplatyCKP
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param date $startDate
     * @return getWplatyCKP
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getStopDate()
    {
      return $this->stopDate;
    }

    /**
     * @param date $stopDate
     * @return getWplatyCKP
     */
    public function setStopDate($stopDate)
    {
      $this->stopDate = $stopDate;
      return $this;
    }

}
