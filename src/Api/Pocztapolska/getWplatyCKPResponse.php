<?php

class getWplatyCKPResponse
{

    /**
     * @var wplataCKPType $wplaty
     */
    protected $wplaty = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param wplataCKPType $wplaty
     * @param errorType $error
     */
    public function __construct($wplaty, $error)
    {
      $this->wplaty = $wplaty;
      $this->error = $error;
    }

    /**
     * @return wplataCKPType
     */
    public function getWplaty()
    {
      return $this->wplaty;
    }

    /**
     * @param wplataCKPType $wplaty
     * @return getWplatyCKPResponse
     */
    public function setWplaty($wplaty)
    {
      $this->wplaty = $wplaty;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return getWplatyCKPResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
