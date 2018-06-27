<?php

class getListaZgodEZwrotow
{

    /**
     * @var statusZgodyEZwrotNameType $status
     */
    protected $status = null;

    /**
     * @param statusZgodyEZwrotNameType $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return statusZgodyEZwrotNameType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusZgodyEZwrotNameType $status
     * @return getListaZgodEZwrotow
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
