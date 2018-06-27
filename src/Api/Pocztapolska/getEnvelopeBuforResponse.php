<?php

class getEnvelopeBuforResponse
{

    /**
     * @var przesylkaType $przesylka
     */
    protected $przesylka = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param przesylkaType $przesylka
     * @param errorType $error
     */
    public function __construct($przesylka, $error)
    {
      $this->przesylka = $przesylka;
      $this->error = $error;
    }

    /**
     * @return przesylkaType
     */
    public function getPrzesylka()
    {
      return $this->przesylka;
    }

    /**
     * @param przesylkaType $przesylka
     * @return getEnvelopeBuforResponse
     */
    public function setPrzesylka($przesylka)
    {
      $this->przesylka = $przesylka;
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
     * @return getEnvelopeBuforResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
