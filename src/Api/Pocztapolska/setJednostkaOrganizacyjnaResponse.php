<?php

class setJednostkaOrganizacyjnaResponse
{

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @var jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    protected $jednostkaOrganizacyjna = null;

    /**
     * @param errorType $error
     * @param jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    public function __construct($error, $jednostkaOrganizacyjna)
    {
      $this->error = $error;
      $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
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
     * @return setJednostkaOrganizacyjnaResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return jednostkaOrganizacyjnaType
     */
    public function getJednostkaOrganizacyjna()
    {
      return $this->jednostkaOrganizacyjna;
    }

    /**
     * @param jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     * @return setJednostkaOrganizacyjnaResponse
     */
    public function setJednostkaOrganizacyjna($jednostkaOrganizacyjna)
    {
      $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
      return $this;
    }

}
