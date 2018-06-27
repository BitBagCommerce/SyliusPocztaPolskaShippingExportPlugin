<?php

class getProfilListResponse
{

    /**
     * @var profilType $profil
     */
    protected $profil = null;

    /**
     * @param profilType $profil
     */
    public function __construct($profil)
    {
      $this->profil = $profil;
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
     * @return getProfilListResponse
     */
    public function setProfil($profil)
    {
      $this->profil = $profil;
      return $this;
    }

}
