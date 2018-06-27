<?php

class wyslijLinkaOStatusieEZwrotu
{

    /**
     * @var guidType $guidZgodaEZwrot
     */
    protected $guidZgodaEZwrot = null;

    /**
     * @param guidType $guidZgodaEZwrot
     */
    public function __construct($guidZgodaEZwrot)
    {
      $this->guidZgodaEZwrot = $guidZgodaEZwrot;
    }

    /**
     * @return guidType
     */
    public function getGuidZgodaEZwrot()
    {
      return $this->guidZgodaEZwrot;
    }

    /**
     * @param guidType $guidZgodaEZwrot
     * @return wyslijLinkaOStatusieEZwrotu
     */
    public function setGuidZgodaEZwrot($guidZgodaEZwrot)
    {
      $this->guidZgodaEZwrot = $guidZgodaEZwrot;
      return $this;
    }

}
