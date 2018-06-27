<?php

class oczekujeNaZgodeEZwrotType
{

    /**
     * @var shopEZwrotyType $sklepEZwrot
     */
    protected $sklepEZwrot = null;

    /**
     * @var int $idZgody
     */
    protected $idZgody = null;

    /**
     * @var nazwaProduktuEZwrotType $nazwaProduktu
     */
    protected $nazwaProduktu = null;

    /**
     * @var numerZamowieniaEZwrotType $numerZamowienia
     */
    protected $numerZamowienia = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var emailType $email
     */
    protected $email = null;

    /**
     * @var date $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @var guidType $guidZgodaEZwrot
     */
    protected $guidZgodaEZwrot = null;

    /**
     * @param int $idZgody
     * @param nazwaProduktuEZwrotType $nazwaProduktu
     * @param numerZamowieniaEZwrotType $numerZamowienia
     * @param numerNadaniaType $numerNadania
     * @param emailType $email
     * @param date $dataNadania
     * @param guidType $guidZgodaEZwrot
     */
    public function __construct($idZgody, $nazwaProduktu, $numerZamowienia, $numerNadania, $email, $dataNadania, $guidZgodaEZwrot)
    {
      $this->idZgody = $idZgody;
      $this->nazwaProduktu = $nazwaProduktu;
      $this->numerZamowienia = $numerZamowienia;
      $this->numerNadania = $numerNadania;
      $this->email = $email;
      $this->dataNadania = $dataNadania;
      $this->guidZgodaEZwrot = $guidZgodaEZwrot;
    }

    /**
     * @return shopEZwrotyType
     */
    public function getSklepEZwrot()
    {
      return $this->sklepEZwrot;
    }

    /**
     * @param shopEZwrotyType $sklepEZwrot
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setSklepEZwrot($sklepEZwrot)
    {
      $this->sklepEZwrot = $sklepEZwrot;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdZgody()
    {
      return $this->idZgody;
    }

    /**
     * @param int $idZgody
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setIdZgody($idZgody)
    {
      $this->idZgody = $idZgody;
      return $this;
    }

    /**
     * @return nazwaProduktuEZwrotType
     */
    public function getNazwaProduktu()
    {
      return $this->nazwaProduktu;
    }

    /**
     * @param nazwaProduktuEZwrotType $nazwaProduktu
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setNazwaProduktu($nazwaProduktu)
    {
      $this->nazwaProduktu = $nazwaProduktu;
      return $this;
    }

    /**
     * @return numerZamowieniaEZwrotType
     */
    public function getNumerZamowienia()
    {
      return $this->numerZamowienia;
    }

    /**
     * @param numerZamowieniaEZwrotType $numerZamowienia
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setNumerZamowienia($numerZamowienia)
    {
      $this->numerZamowienia = $numerZamowienia;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadania()
    {
      return $this->numerNadania;
    }

    /**
     * @param numerNadaniaType $numerNadania
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return emailType
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param emailType $email
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setDataNadania($dataNadania)
    {
      $this->dataNadania = $dataNadania;
      return $this;
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
     * @return oczekujeNaZgodeEZwrotType
     */
    public function setGuidZgodaEZwrot($guidZgodaEZwrot)
    {
      $this->guidZgodaEZwrot = $guidZgodaEZwrot;
      return $this;
    }

}
