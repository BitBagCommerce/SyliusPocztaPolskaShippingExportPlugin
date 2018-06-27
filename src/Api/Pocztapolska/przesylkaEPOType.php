<?php

class przesylkaEPOType
{

    /**
     * @var EPOInfoType $EPOInfo
     */
    protected $EPOInfo = null;

    /**
     * @var base64Binary $biometricSignatureContent
     */
    protected $biometricSignatureContent = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var statusEPOEnum $statusEPO
     */
    protected $statusEPO = null;

    /**
     * @param guidType $guid
     * @param numerNadaniaType $numerNadania
     * @param statusEPOEnum $statusEPO
     */
    public function __construct($guid, $numerNadania, $statusEPO)
    {
      $this->guid = $guid;
      $this->numerNadania = $numerNadania;
      $this->statusEPO = $statusEPO;
    }

    /**
     * @return EPOInfoType
     */
    public function getEPOInfo()
    {
      return $this->EPOInfo;
    }

    /**
     * @param EPOInfoType $EPOInfo
     * @return przesylkaEPOType
     */
    public function setEPOInfo($EPOInfo)
    {
      $this->EPOInfo = $EPOInfo;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBiometricSignatureContent()
    {
      return $this->biometricSignatureContent;
    }

    /**
     * @param base64Binary $biometricSignatureContent
     * @return przesylkaEPOType
     */
    public function setBiometricSignatureContent($biometricSignatureContent)
    {
      $this->biometricSignatureContent = $biometricSignatureContent;
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
     * @return przesylkaEPOType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
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
     * @return przesylkaEPOType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return statusEPOEnum
     */
    public function getStatusEPO()
    {
      return $this->statusEPO;
    }

    /**
     * @param statusEPOEnum $statusEPO
     * @return przesylkaEPOType
     */
    public function setStatusEPO($statusEPO)
    {
      $this->statusEPO = $statusEPO;
      return $this;
    }

}
