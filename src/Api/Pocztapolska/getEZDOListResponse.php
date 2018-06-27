<?php

class getEZDOListResponse
{

    /**
     * @var EZDOPakietType $EZDOPakiet
     */
    protected $EZDOPakiet = null;

    /**
     * @param EZDOPakietType $EZDOPakiet
     */
    public function __construct($EZDOPakiet)
    {
      $this->EZDOPakiet = $EZDOPakiet;
    }

    /**
     * @return EZDOPakietType
     */
    public function getEZDOPakiet()
    {
      return $this->EZDOPakiet;
    }

    /**
     * @param EZDOPakietType $EZDOPakiet
     * @return getEZDOListResponse
     */
    public function setEZDOPakiet($EZDOPakiet)
    {
      $this->EZDOPakiet = $EZDOPakiet;
      return $this;
    }

}
