<?php

class getKierunkiResponse
{

    /**
     * @var kierunekType $kierunek
     */
    protected $kierunek = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param kierunekType $kierunek
     * @param errorType $error
     */
    public function __construct($kierunek, $error)
    {
      $this->kierunek = $kierunek;
      $this->error = $error;
    }

    /**
     * @return kierunekType
     */
    public function getKierunek()
    {
      return $this->kierunek;
    }

    /**
     * @param kierunekType $kierunek
     * @return getKierunkiResponse
     */
    public function setKierunek($kierunek)
    {
      $this->kierunek = $kierunek;
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
     * @return getKierunkiResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
