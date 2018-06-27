<?php

class getEnvelopeList
{

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @param date $startDate
     * @param date $endDate
     */
    public function __construct($startDate, $endDate)
    {
      $this->startDate = $startDate;
      $this->endDate = $endDate;
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
     * @return getEnvelopeList
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param date $endDate
     * @return getEnvelopeList
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
