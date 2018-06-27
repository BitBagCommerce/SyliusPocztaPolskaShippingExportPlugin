<?php

class getPaczkaKorzysciInfoResponse
{

    /**
     * @var statusPaczkaKorzysciType $status
     */
    protected $status = null;

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var infoPaczkaKorzysciType $info
     */
    protected $info = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param statusPaczkaKorzysciType $status
     * @param int $idKarta
     * @param infoPaczkaKorzysciType $info
     * @param errorType $error
     */
    public function __construct($status, $idKarta, $info, $error)
    {
      $this->status = $status;
      $this->idKarta = $idKarta;
      $this->info = $info;
      $this->error = $error;
    }

    /**
     * @return statusPaczkaKorzysciType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusPaczkaKorzysciType $status
     * @return getPaczkaKorzysciInfoResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdKarta()
    {
      return $this->idKarta;
    }

    /**
     * @param int $idKarta
     * @return getPaczkaKorzysciInfoResponse
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

    /**
     * @return infoPaczkaKorzysciType
     */
    public function getInfo()
    {
      return $this->info;
    }

    /**
     * @param infoPaczkaKorzysciType $info
     * @return getPaczkaKorzysciInfoResponse
     */
    public function setInfo($info)
    {
      $this->info = $info;
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
     * @return getPaczkaKorzysciInfoResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
