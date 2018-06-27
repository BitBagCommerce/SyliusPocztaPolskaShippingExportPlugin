<?php

class profilType extends adresType
{

    /**
     * @var int $idProfil
     */
    protected $idProfil = null;

    /**
     * @var string $nazwaSkrocona
     */
    protected $nazwaSkrocona = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @param nazwaType $nazwa
     * @param nazwa2Type $nazwa2
     * @param ulicaType $ulica
     * @param numerDomuType $numerDomu
     * @param numerLokaluType $numerLokalu
     * @param miejscowoscType $miejscowosc
     * @param kodPocztowyType $kodPocztowy
     * @param krajType $kraj
     * @param telefonType $telefon
     * @param emailType $email
     * @param mobileType $mobile
     * @param string $osobaKontaktowa
     * @param string $nip
     * @param int $idProfil
     * @param string $nazwaSkrocona
     * @param string $fax
     */
    public function __construct($nazwa, $nazwa2, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $kraj, $telefon, $email, $mobile, $osobaKontaktowa, $nip, $idProfil, $nazwaSkrocona, $fax)
    {
      parent::__construct($nazwa, $nazwa2, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $kraj, $telefon, $email, $mobile, $osobaKontaktowa, $nip);
      $this->idProfil = $idProfil;
      $this->nazwaSkrocona = $nazwaSkrocona;
      $this->fax = $fax;
    }

    /**
     * @return int
     */
    public function getIdProfil()
    {
      return $this->idProfil;
    }

    /**
     * @param int $idProfil
     * @return profilType
     */
    public function setIdProfil($idProfil)
    {
      $this->idProfil = $idProfil;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwaSkrocona()
    {
      return $this->nazwaSkrocona;
    }

    /**
     * @param string $nazwaSkrocona
     * @return profilType
     */
    public function setNazwaSkrocona($nazwaSkrocona)
    {
      $this->nazwaSkrocona = $nazwaSkrocona;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return profilType
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

}
