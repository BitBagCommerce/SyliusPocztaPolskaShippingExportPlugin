<?php

class buforType
{

    /**
     * @var profilType $profil
     */
    protected $profil = null;

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @var date $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @param int $idBufor
     * @param date $dataNadania
     * @param urzadNadaniaType $urzadNadania
     * @param boolean $active
     * @param string $opis
     */
    public function __construct($idBufor, $dataNadania, $urzadNadania, $active, $opis)
    {
      $this->idBufor = $idBufor;
      $this->dataNadania = $dataNadania;
      $this->urzadNadania = $urzadNadania;
      $this->active = $active;
      $this->opis = $opis;
    }

    /**
     * @return profilType
     */
    public function getProfil()
    {
      return $this->profil;
    }

    /**
     * @param profilType $profil
     * @return buforType
     */
    public function setProfil($profil)
    {
      $this->profil = $profil;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdBufor()
    {
      return $this->idBufor;
    }

    /**
     * @param int $idBufor
     * @return buforType
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataNadania()
    {
      return $this->dataNadania;
    }

    /**
     * @param date $dataNadania
     * @return buforType
     */
    public function setDataNadania($dataNadania)
    {
      $this->dataNadania = $dataNadania;
      return $this;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getUrzadNadania()
    {
      return $this->urzadNadania;
    }

    /**
     * @param urzadNadaniaType $urzadNadania
     * @return buforType
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param boolean $active
     * @return buforType
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param string $opis
     * @return buforType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

}
