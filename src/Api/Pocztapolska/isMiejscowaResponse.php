<?php

class isMiejscowaResponse
{

    /**
     * @var trasaResponseType $trasaResponse
     */
    protected $trasaResponse = null;

    /**
     * @param trasaResponseType $trasaResponse
     */
    public function __construct($trasaResponse)
    {
      $this->trasaResponse = $trasaResponse;
    }

    /**
     * @return trasaResponseType
     */
    public function getTrasaResponse()
    {
      return $this->trasaResponse;
    }

    /**
     * @param trasaResponseType $trasaResponse
     * @return isMiejscowaResponse
     */
    public function setTrasaResponse($trasaResponse)
    {
      $this->trasaResponse = $trasaResponse;
      return $this;
    }

}
