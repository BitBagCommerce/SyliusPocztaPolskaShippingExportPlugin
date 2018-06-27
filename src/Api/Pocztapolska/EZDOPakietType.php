<?php

class EZDOPakietType
{

    /**
     * @var int $idEZDOPakiet
     */
    protected $idEZDOPakiet = null;

    /**
     * @var date $exported
     */
    protected $exported = null;

    /**
     * @var string $idEZDOFile
     */
    protected $idEZDOFile = null;

    /**
     * @param int $idEZDOPakiet
     * @param date $exported
     * @param string $idEZDOFile
     */
    public function __construct($idEZDOPakiet, $exported, $idEZDOFile)
    {
      $this->idEZDOPakiet = $idEZDOPakiet;
      $this->exported = $exported;
      $this->idEZDOFile = $idEZDOFile;
    }

    /**
     * @return int
     */
    public function getIdEZDOPakiet()
    {
      return $this->idEZDOPakiet;
    }

    /**
     * @param int $idEZDOPakiet
     * @return EZDOPakietType
     */
    public function setIdEZDOPakiet($idEZDOPakiet)
    {
      $this->idEZDOPakiet = $idEZDOPakiet;
      return $this;
    }

    /**
     * @return date
     */
    public function getExported()
    {
      return $this->exported;
    }

    /**
     * @param date $exported
     * @return EZDOPakietType
     */
    public function setExported($exported)
    {
      $this->exported = $exported;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdEZDOFile()
    {
      return $this->idEZDOFile;
    }

    /**
     * @param string $idEZDOFile
     * @return EZDOPakietType
     */
    public function setIdEZDOFile($idEZDOFile)
    {
      $this->idEZDOFile = $idEZDOFile;
      return $this;
    }

}
