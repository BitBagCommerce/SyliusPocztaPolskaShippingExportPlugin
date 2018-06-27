<?php

class getEPOStatusResponse
{

    /**
     * @var przesylkaEPOType $epo
     */
    protected $epo = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param przesylkaEPOType $epo
     * @param errorType $error
     */
    public function __construct($epo, $error)
    {
      $this->epo = $epo;
      $this->error = $error;
    }

    /**
     * @return przesylkaEPOType
     */
    public function getEpo()
    {
      return $this->epo;
    }

    /**
     * @param przesylkaEPOType $epo
     * @return getEPOStatusResponse
     */
    public function setEpo($epo)
    {
      $this->epo = $epo;
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
     * @return getEPOStatusResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
