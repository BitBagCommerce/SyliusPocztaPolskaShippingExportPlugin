<?php

class envelopeInfoType
{

    /**
     * @var errorType[] $error
     */
    protected $error = null;

    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * @var envelopeStatusType $envelopeStatus
     */
    protected $envelopeStatus = null;

    /**
     * @var date $dataTransmisji
     */
    protected $dataTransmisji = null;

    /**
     * @param int $idEnvelope
     * @param envelopeStatusType $envelopeStatus
     * @param date $dataTransmisji
     */
    public function __construct($idEnvelope, $envelopeStatus, $dataTransmisji)
    {
      $this->idEnvelope = $idEnvelope;
      $this->envelopeStatus = $envelopeStatus;
      $this->dataTransmisji = $dataTransmisji;
    }

    /**
     * @return errorType[]
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType[] $error
     * @return envelopeInfoType
     */
    public function setError(array $error = null)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdEnvelope()
    {
      return $this->idEnvelope;
    }

    /**
     * @param int $idEnvelope
     * @return envelopeInfoType
     */
    public function setIdEnvelope($idEnvelope)
    {
      $this->idEnvelope = $idEnvelope;
      return $this;
    }

    /**
     * @return envelopeStatusType
     */
    public function getEnvelopeStatus()
    {
      return $this->envelopeStatus;
    }

    /**
     * @param envelopeStatusType $envelopeStatus
     * @return envelopeInfoType
     */
    public function setEnvelopeStatus($envelopeStatus)
    {
      $this->envelopeStatus = $envelopeStatus;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataTransmisji()
    {
      return $this->dataTransmisji;
    }

    /**
     * @param date $dataTransmisji
     * @return envelopeInfoType
     */
    public function setDataTransmisji($dataTransmisji)
    {
      $this->dataTransmisji = $dataTransmisji;
      return $this;
    }

}
