<?php

class getEnvelopeListResponse
{

    /**
     * @var envelopeInfoType $envelopes
     */
    protected $envelopes = null;

    /**
     * @param envelopeInfoType $envelopes
     */
    public function __construct($envelopes)
    {
      $this->envelopes = $envelopes;
    }

    /**
     * @return envelopeInfoType
     */
    public function getEnvelopes()
    {
      return $this->envelopes;
    }

    /**
     * @param envelopeInfoType $envelopes
     * @return getEnvelopeListResponse
     */
    public function setEnvelopes($envelopes)
    {
      $this->envelopes = $envelopes;
      return $this;
    }

}
