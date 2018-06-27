<?php

class setStatusZgodyNaEZwrot
{

    /**
     * @var statusZgodyEZwrotType $statusZgody
     */
    protected $statusZgody = null;

    /**
     * @param statusZgodyEZwrotType $statusZgody
     */
    public function __construct($statusZgody)
    {
      $this->statusZgody = $statusZgody;
    }

    /**
     * @return statusZgodyEZwrotType
     */
    public function getStatusZgody()
    {
      return $this->statusZgody;
    }

    /**
     * @param statusZgodyEZwrotType $statusZgody
     * @return setStatusZgodyNaEZwrot
     */
    public function setStatusZgody($statusZgody)
    {
      $this->statusZgody = $statusZgody;
      return $this;
    }

}
