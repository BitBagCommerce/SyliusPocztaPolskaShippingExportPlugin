<?php

class adresType
{

    /**
     * @var nazwaType $nazwa
     */
    protected $nazwa = null;

    /**
     * @var nazwa2Type $nazwa2
     */
    protected $nazwa2 = null;

    /**
     * @var ulicaType $ulica
     */
    protected $ulica = null;

    /**
     * @var numerDomuType $numerDomu
     */
    protected $numerDomu = null;

    /**
     * @var numerLokaluType $numerLokalu
     */
    protected $numerLokalu = null;

    /**
     * @var miejscowoscType $miejscowosc
     */
    protected $miejscowosc = null;

    /**
     * @var kodPocztowyType $kodPocztowy
     */
    protected $kodPocztowy = null;

    /**
     * @var krajType $kraj
     */
    protected $kraj = null;

    /**
     * @var telefonType $telefon
     */
    protected $telefon = null;

    /**
     * @var emailType $email
     */
    protected $email = null;

    /**
     * @var mobileType $mobile
     */
    protected $mobile = null;

    /**
     * @var string $osobaKontaktowa
     */
    protected $osobaKontaktowa = null;

    /**
     * @var string $nip
     */
    protected $nip = null;

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
     */
    public function __construct($nazwa, $nazwa2, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $kraj, $telefon, $email, $mobile, $osobaKontaktowa, $nip)
    {
      $this->nazwa = $nazwa;
      $this->nazwa2 = $nazwa2;
      $this->ulica = $ulica;
      $this->numerDomu = $numerDomu;
      $this->numerLokalu = $numerLokalu;
      $this->miejscowosc = $miejscowosc;
      $this->kodPocztowy = $kodPocztowy;
      $this->kraj = $kraj;
      $this->telefon = $telefon;
      $this->email = $email;
      $this->mobile = $mobile;
      $this->osobaKontaktowa = $osobaKontaktowa;
      $this->nip = $nip;
    }

    /**
     * @return nazwaType
     */
    public function getNazwa()
    {
      return $this->nazwa;
    }

    /**
     * @param nazwaType $nazwa
     * @return adresType
     */
    public function setNazwa($nazwa)
    {
      $this->nazwa = $nazwa;
      return $this;
    }

    /**
     * @return nazwa2Type
     */
    public function getNazwa2()
    {
      return $this->nazwa2;
    }

    /**
     * @param nazwa2Type $nazwa2
     * @return adresType
     */
    public function setNazwa2($nazwa2)
    {
      $this->nazwa2 = $nazwa2;
      return $this;
    }

    /**
     * @return ulicaType
     */
    public function getUlica()
    {
      return $this->ulica;
    }

    /**
     * @param ulicaType $ulica
     * @return adresType
     */
    public function setUlica($ulica)
    {
      $this->ulica = $ulica;
      return $this;
    }

    /**
     * @return numerDomuType
     */
    public function getNumerDomu()
    {
      return $this->numerDomu;
    }

    /**
     * @param numerDomuType $numerDomu
     * @return adresType
     */
    public function setNumerDomu($numerDomu)
    {
      $this->numerDomu = $numerDomu;
      return $this;
    }

    /**
     * @return numerLokaluType
     */
    public function getNumerLokalu()
    {
      return $this->numerLokalu;
    }

    /**
     * @param numerLokaluType $numerLokalu
     * @return adresType
     */
    public function setNumerLokalu($numerLokalu)
    {
      $this->numerLokalu = $numerLokalu;
      return $this;
    }

    /**
     * @return miejscowoscType
     */
    public function getMiejscowosc()
    {
      return $this->miejscowosc;
    }

    /**
     * @param miejscowoscType $miejscowosc
     * @return adresType
     */
    public function setMiejscowosc($miejscowosc)
    {
      $this->miejscowosc = $miejscowosc;
      return $this;
    }

    /**
     * @return kodPocztowyType
     */
    public function getKodPocztowy()
    {
      return $this->kodPocztowy;
    }

    /**
     * @param kodPocztowyType $kodPocztowy
     * @return adresType
     */
    public function setKodPocztowy($kodPocztowy)
    {
      $this->kodPocztowy = $kodPocztowy;
      return $this;
    }

    /**
     * @return krajType
     */
    public function getKraj()
    {
      return $this->kraj;
    }

    /**
     * @param krajType $kraj
     * @return adresType
     */
    public function setKraj($kraj)
    {
      $this->kraj = $kraj;
      return $this;
    }

    /**
     * @return telefonType
     */
    public function getTelefon()
    {
      return $this->telefon;
    }

    /**
     * @param telefonType $telefon
     * @return adresType
     */
    public function setTelefon($telefon)
    {
      $this->telefon = $telefon;
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
     * @return adresType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return mobileType
     */
    public function getMobile()
    {
      return $this->mobile;
    }

    /**
     * @param mobileType $mobile
     * @return adresType
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getOsobaKontaktowa()
    {
      return $this->osobaKontaktowa;
    }

    /**
     * @param string $osobaKontaktowa
     * @return adresType
     */
    public function setOsobaKontaktowa($osobaKontaktowa)
    {
      $this->osobaKontaktowa = $osobaKontaktowa;
      return $this;
    }

    /**
     * @return string
     */
    public function getNip()
    {
      return $this->nip;
    }

    /**
     * @param string $nip
     * @return adresType
     */
    public function setNip($nip)
    {
      $this->nip = $nip;
      return $this;
    }

}
