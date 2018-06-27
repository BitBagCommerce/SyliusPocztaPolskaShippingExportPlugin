<?php

class addOdwolanieDoReklamacjiResponse
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
     * @return addOdwolanieDoReklamacjiResponse
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
     * @return addOdwolanieDoReklamacjiResponse
     */
    public function setReklamacjaInfo($reklamacjaInfo)
    {
      $this->reklamacjaInfo = $reklamacjaInfo;
      return $this;
    }

}
