<?php

class getEnvelopeBuforListResponse
{

    /**
     * @var buforType $bufor
     */
    protected $bufor = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param buforType $bufor
     * @param errorType $error
     */
    public function __construct($bufor, $error)
    {
      $this->bufor = $bufor;
      $this->error = $error;
    }

    /**
     * @return buforType
     */
    public function getBufor()
    {
      return $this->bufor;
    }

    /**
     * @param buforType $bufor
     * @return getEnvelopeBuforListResponse
     */
    public function setBufor($bufor)
    {
      $this->bufor = $bufor;
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
     * @return getEnvelopeBuforListResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
