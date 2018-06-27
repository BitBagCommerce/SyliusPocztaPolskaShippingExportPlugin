<?php

class shopEZwrotyType
{

    /**
     * @var eZwrotPrzesylkiType[] $eZwrotPrzesylki
     */
    protected $eZwrotPrzesylki = null;

    /**
     * @var int $idShop
     */
    protected $idShop = null;

    /**
     * @var nazwaEZwrotyType $nazwa
     */
    protected $nazwa = null;

    /**
     * @var nazwaEZwrotyType $nazwa2
     */
    protected $nazwa2 = null;

    /**
     * @var nazwaEZwrotyType $przyjaznaNazwa
     */
    protected $przyjaznaNazwa = null;

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
     * @var mobileType $mobile
     */
    protected $mobile = null;

    /**
     * @var emailType $email
     */
    protected $email = null;

    /**
     * @var string $nip
     */
    protected $nip = null;

    /**
     * @var string $regon
     */
    protected $regon = null;

    /**
     * @var string $krs
     */
    protected $krs = null;

    /**
     * @var eZwrotTypZgodyType $eZwrotTyp
     */
    protected $eZwrotTyp = null;

    /**
     * @var boolean $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     */
    protected $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null;

    /**
     * @param eZwrotPrzesylkiType[] $eZwrotPrzesylki
     * @param int $idShop
     * @param nazwaEZwrotyType $nazwa
     * @param nazwaEZwrotyType $nazwa2
     * @param nazwaEZwrotyType $przyjaznaNazwa
     * @param ulicaType $ulica
     * @param numerDomuType $numerDomu
     * @param numerLokaluType $numerLokalu
     * @param miejscowoscType $miejscowosc
     * @param kodPocztowyType $kodPocztowy
     * @param mobileType $mobile
     * @param emailType $email
     * @param string $nip
     * @param string $regon
     * @param string $krs
     * @param eZwrotTypZgodyType $eZwrotTyp
     * @param boolean $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     */
    public function __construct(array $eZwrotPrzesylki, $idShop, $nazwa, $nazwa2, $przyjaznaNazwa, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $mobile, $email, $nip, $regon, $krs, $eZwrotTyp, $wymagalnoscNumeruIdentyfikujacegoPrzesylke)
    {
      $this->eZwrotPrzesylki = $eZwrotPrzesylki;
      $this->idShop = $idShop;
      $this->nazwa = $nazwa;
      $this->nazwa2 = $nazwa2;
      $this->przyjaznaNazwa = $przyjaznaNazwa;
      $this->ulica = $ulica;
      $this->numerDomu = $numerDomu;
      $this->numerLokalu = $numerLokalu;
      $this->miejscowosc = $miejscowosc;
      $this->kodPocztowy = $kodPocztowy;
      $this->mobile = $mobile;
      $this->email = $email;
      $this->nip = $nip;
      $this->regon = $regon;
      $this->krs = $krs;
      $this->eZwrotTyp = $eZwrotTyp;
      $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }

    /**
     * @return eZwrotPrzesylkiType[]
     */
    public function getEZwrotPrzesylki()
    {
      return $this->eZwrotPrzesylki;
    }

    /**
     * @param eZwrotPrzesylkiType[] $eZwrotPrzesylki
     * @return shopEZwrotyType
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki)
    {
      $this->eZwrotPrzesylki = $eZwrotPrzesylki;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdShop()
    {
      return $this->idShop;
    }

    /**
     * @param int $idShop
     * @return shopEZwrotyType
     */
    public function setIdShop($idShop)
    {
      $this->idShop = $idShop;
      return $this;
    }

    /**
     * @return nazwaEZwrotyType
     */
    public function getNazwa()
    {
      return $this->nazwa;
    }

    /**
     * @param nazwaEZwrotyType $nazwa
     * @return shopEZwrotyType
     */
    public function setNazwa($nazwa)
    {
      $this->nazwa = $nazwa;
      return $this;
    }

    /**
     * @return nazwaEZwrotyType
     */
    public function getNazwa2()
    {
      return $this->nazwa2;
    }

    /**
     * @param nazwaEZwrotyType $nazwa2
     * @return shopEZwrotyType
     */
    public function setNazwa2($nazwa2)
    {
      $this->nazwa2 = $nazwa2;
      return $this;
    }

    /**
     * @return nazwaEZwrotyType
     */
    public function getPrzyjaznaNazwa()
    {
      return $this->przyjaznaNazwa;
    }

    /**
     * @param nazwaEZwrotyType $przyjaznaNazwa
     * @return shopEZwrotyType
     */
    public function setPrzyjaznaNazwa($przyjaznaNazwa)
    {
      $this->przyjaznaNazwa = $przyjaznaNazwa;
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
     * @return shopEZwrotyType
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
     * @return shopEZwrotyType
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
     * @return shopEZwrotyType
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
     * @return shopEZwrotyType
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
     * @return shopEZwrotyType
     */
    public function setKodPocztowy($kodPocztowy)
    {
      $this->kodPocztowy = $kodPocztowy;
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
     * @return shopEZwrotyType
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
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
     * @return shopEZwrotyType
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return shopEZwrotyType
     */
    public function setNip($nip)
    {
      $this->nip = $nip;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegon()
    {
      return $this->regon;
    }

    /**
     * @param string $regon
     * @return shopEZwrotyType
     */
    public function setRegon($regon)
    {
      $this->regon = $regon;
      return $this;
    }

    /**
     * @return string
     */
    public function getKrs()
    {
      return $this->krs;
    }

    /**
     * @param string $krs
     * @return shopEZwrotyType
     */
    public function setKrs($krs)
    {
      $this->krs = $krs;
      return $this;
    }

    /**
     * @return eZwrotTypZgodyType
     */
    public function getEZwrotTyp()
    {
      return $this->eZwrotTyp;
    }

    /**
     * @param eZwrotTypZgodyType $eZwrotTyp
     * @return shopEZwrotyType
     */
    public function setEZwrotTyp($eZwrotTyp)
    {
      $this->eZwrotTyp = $eZwrotTyp;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWymagalnoscNumeruIdentyfikujacegoPrzesylke()
    {
      return $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }

    /**
     * @param boolean $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @return shopEZwrotyType
     */
    public function setWymagalnoscNumeruIdentyfikujacegoPrzesylke($wymagalnoscNumeruIdentyfikujacegoPrzesylke)
    {
      $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;
      return $this;
    }

}
