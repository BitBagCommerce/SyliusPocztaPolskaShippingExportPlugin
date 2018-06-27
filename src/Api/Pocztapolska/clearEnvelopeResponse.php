<?php

class clearEnvelopeResponse
{

    /**
     * @var boolean $retval
     */
    protected $retval = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param boolean $retval
     * @param errorType $error
     */
    public function __construct($retval, $error)
    {
      $this->retval = $retval;
      $this->error = $error;
    }

    /**
     * @return boolean
     */
    public function getRetval()
    {
      return $this->retval;
    }

    /**
     * @param boolean $retval
     * @return clearEnvelopeResponse
     */
    public function setRetval($retval)
    {
      $this->retval = $retval;
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
     * @return clearEnvelopeResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
