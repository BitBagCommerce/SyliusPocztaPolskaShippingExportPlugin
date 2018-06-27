<?php

class addReklamacjeResponse
{

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @var reklamacjaInfoType $reklamacjaInfo
     */
    protected $reklamacjaInfo = null;

    /**
     * @param errorType $error
     * @param reklamacjaInfoType $reklamacjaInfo
     */
    public function __construct($error, $reklamacjaInfo)
    {
      $this->error = $error;
      $this->reklamacjaInfo = $reklamacjaInfo;
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
     * @return addReklamacjeResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return reklamacjaInfoType
     */
    public function getReklamacjaInfo()
    {
      return $this->reklamacjaInfo;
    }

    /**
     * @param reklamacjaInfoType $reklamacjaInfo
     * @return addReklamacjeResponse
     */
    public function setReklamacjaInfo($reklamacjaInfo)
    {
      $this->reklamacjaInfo = $reklamacjaInfo;
      return $this;
    }

}
