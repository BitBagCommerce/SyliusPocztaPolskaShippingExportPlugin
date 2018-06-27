<?php

class getReklamacje
{

    /**
     * @var date $dataRozpatrzenia
     */
    protected $dataRozpatrzenia = null;

    /**
     * @param date $dataRozpatrzenia
     */
    public function __construct($dataRozpatrzenia)
    {
      $this->dataRozpatrzenia = $dataRozpatrzenia;
    }

    /**
     * @return date
     */
    public function getDataRozpatrzenia()
    {
      return $this->dataRozpatrzenia;
    }

    /**
     * @param date $dataRozpatrzenia
     * @return getReklamacje
     */
    public function setDataRozpatrzenia($dataRozpatrzenia)
    {
      $this->dataRozpatrzenia = $dataRozpatrzenia;
      return $this;
    }

}
