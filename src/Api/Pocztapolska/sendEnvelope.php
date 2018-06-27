<?php

class sendEnvelope
{

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var pakietType $pakiet
     */
    protected $pakiet = null;

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @var profilType $profil
     */
    protected $profil = null;

    /**
     * @param urzadNadaniaType $urzadNadania
     * @param pakietType $pakiet
     * @param int $idBufor
     * @param profilType $profil
     */
    public function __construct($urzadNadania, $pakiet, $idBufor, $profil)
    {
      $this->urzadNadania = $urzadNadania;
      $this->pakiet = $pakiet;
      $this->idBufor = $idBufor;
      $this->profil = $profil;
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
     * @return sendEnvelope
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return pakietType
     */
    public function getPakiet()
    {
      return $this->pakiet;
    }

    /**
     * @param pakietType $pakiet
     * @return sendEnvelope
     */
    public function setPakiet($pakiet)
    {
      $this->pakiet = $pakiet;
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
     * @return sendEnvelope
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
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
     * @return sendEnvelope
     */
    public function setProfil($profil)
    {
      $this->profil = $profil;
      return $this;
    }

}
