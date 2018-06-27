<?php

class pocztexKrajowyType extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var odbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     */
    protected $odbiorPrzesylkiOdNadawcy = null;

    /**
     * @var doreczenieType $doreczenie
     */
    protected $doreczenie = null;

    /**
     * @var zwrotDokumentowType $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * @var potwierdzenieOdbioruType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var terminRodzajType $terminRodzaj
     */
    protected $terminRodzaj = null;

    /**
     * @var boolean $kopertaFirmowa
     */
    protected $kopertaFirmowa = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var boolean $ponadgabaryt
     */
    protected $ponadgabaryt = null;

    /**
     * @var uiszczaOplateType $uiszczaOplate
     */
    protected $uiszczaOplate = null;

    /**
     * @var int $odleglosc
     */
    protected $odleglosc = null;

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     * @param sygnaturaType $sygnatura
     * @param terminType $terminSprawy
     * @param rodzajType $rodzaj
     * @param boolean $posteRestante
     * @param terminRodzajType $terminRodzaj
     * @param boolean $kopertaFirmowa
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param boolean $ostroznie
     * @param boolean $ponadgabaryt
     * @param uiszczaOplateType $uiszczaOplate
     * @param int $odleglosc
     * @param string $zawartosc
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $posteRestante, $terminRodzaj, $kopertaFirmowa, $masa, $wartosc, $ostroznie, $ponadgabaryt, $uiszczaOplate, $odleglosc, $zawartosc, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->posteRestante = $posteRestante;
      $this->terminRodzaj = $terminRodzaj;
      $this->kopertaFirmowa = $kopertaFirmowa;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->ostroznie = $ostroznie;
      $this->ponadgabaryt = $ponadgabaryt;
      $this->uiszczaOplate = $uiszczaOplate;
      $this->odleglosc = $odleglosc;
      $this->zawartosc = $zawartosc;
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @return pobranieType
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param pobranieType $pobranie
     * @return pocztexKrajowyType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return odbiorPrzesylkiOdNadawcyType
     */
    public function getOdbiorPrzesylkiOdNadawcy()
    {
      return $this->odbiorPrzesylkiOdNadawcy;
    }

    /**
     * @param odbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return pocztexKrajowyType
     */
    public function setOdbiorPrzesylkiOdNadawcy($odbiorPrzesylkiOdNadawcy)
    {
      $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
      return $this;
    }

    /**
     * @return doreczenieType
     */
    public function getDoreczenie()
    {
      return $this->doreczenie;
    }

    /**
     * @param doreczenieType $doreczenie
     * @return pocztexKrajowyType
     */
    public function setDoreczenie($doreczenie)
    {
      $this->doreczenie = $doreczenie;
      return $this;
    }

    /**
     * @return zwrotDokumentowType
     */
    public function getZwrotDokumentow()
    {
      return $this->zwrotDokumentow;
    }

    /**
     * @param zwrotDokumentowType $zwrotDokumentow
     * @return pocztexKrajowyType
     */
    public function setZwrotDokumentow($zwrotDokumentow)
    {
      $this->zwrotDokumentow = $zwrotDokumentow;
      return $this;
    }

    /**
     * @return potwierdzenieOdbioruType
     */
    public function getPotwierdzenieOdbioru()
    {
      return $this->potwierdzenieOdbioru;
    }

    /**
     * @param potwierdzenieOdbioruType $potwierdzenieOdbioru
     * @return pocztexKrajowyType
     */
    public function setPotwierdzenieOdbioru($potwierdzenieOdbioru)
    {
      $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
      return $this;
    }

    /**
     * @return potwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
      return $this->potwierdzenieDoreczenia;
    }

    /**
     * @param potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return pocztexKrajowyType
     */
    public function setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
    {
      $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
      return $this;
    }

    /**
     * @return ubezpieczenieType
     */
    public function getUbezpieczenie()
    {
      return $this->ubezpieczenie;
    }

    /**
     * @param ubezpieczenieType $ubezpieczenie
     * @return pocztexKrajowyType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPosteRestante()
    {
      return $this->posteRestante;
    }

    /**
     * @param boolean $posteRestante
     * @return pocztexKrajowyType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
      return $this;
    }

    /**
     * @return terminRodzajType
     */
    public function getTerminRodzaj()
    {
      return $this->terminRodzaj;
    }

    /**
     * @param terminRodzajType $terminRodzaj
     * @return pocztexKrajowyType
     */
    public function setTerminRodzaj($terminRodzaj)
    {
      $this->terminRodzaj = $terminRodzaj;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKopertaFirmowa()
    {
      return $this->kopertaFirmowa;
    }

    /**
     * @param boolean $kopertaFirmowa
     * @return pocztexKrajowyType
     */
    public function setKopertaFirmowa($kopertaFirmowa)
    {
      $this->kopertaFirmowa = $kopertaFirmowa;
      return $this;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return pocztexKrajowyType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return wartoscType
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param wartoscType $wartosc
     * @return pocztexKrajowyType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOstroznie()
    {
      return $this->ostroznie;
    }

    /**
     * @param boolean $ostroznie
     * @return pocztexKrajowyType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPonadgabaryt()
    {
      return $this->ponadgabaryt;
    }

    /**
     * @param boolean $ponadgabaryt
     * @return pocztexKrajowyType
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
      $this->ponadgabaryt = $ponadgabaryt;
      return $this;
    }

    /**
     * @return uiszczaOplateType
     */
    public function getUiszczaOplate()
    {
      return $this->uiszczaOplate;
    }

    /**
     * @param uiszczaOplateType $uiszczaOplate
     * @return pocztexKrajowyType
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      return $this;
    }

    /**
     * @return int
     */
    public function getOdleglosc()
    {
      return $this->odleglosc;
    }

    /**
     * @param int $odleglosc
     * @return pocztexKrajowyType
     */
    public function setOdleglosc($odleglosc)
    {
      $this->odleglosc = $odleglosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getZawartosc()
    {
      return $this->zawartosc;
    }

    /**
     * @param string $zawartosc
     * @return pocztexKrajowyType
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
      return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return pocztexKrajowyType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      return $this;
    }

}
