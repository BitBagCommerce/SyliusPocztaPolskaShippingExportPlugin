<?php

class uslugaKurierskaType extends przesylkaRejestrowanaType
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
     * @var potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var subUslugaKurierskaType[] $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var potwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var zwrotDokumentowKurierskaType $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * @var doreczenieUslugaKurierskaType $doreczenie
     */
    protected $doreczenie = null;

    /**
     * @var EPOType $epo
     */
    protected $epo = null;

    /**
     * @var zasadySpecjalneEnum $zasadySpecjalne
     */
    protected $zasadySpecjalne = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ponadgabaryt
     */
    protected $ponadgabaryt = null;

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
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var uiszczaOplateType $uiszczaOplate
     */
    protected $uiszczaOplate = null;

    /**
     * @var terminKurierskaType $termin
     */
    protected $termin = null;

    /**
     * @var opakowanieKurierskaType $opakowanie
     */
    protected $opakowanie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var numerTransakcjiOdbioruType $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru = null;

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
     * @param subUslugaKurierskaType[] $subPrzesylka
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param boolean $ponadgabaryt
     * @param int $odleglosc
     * @param string $zawartosc
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param boolean $ostroznie
     * @param uiszczaOplateType $uiszczaOplate
     * @param terminKurierskaType $termin
     * @param opakowanieKurierskaType $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param numerTransakcjiOdbioruType $numerTransakcjiOdbioru
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, array $subPrzesylka, $zasadySpecjalne, $masa, $wartosc, $ponadgabaryt, $odleglosc, $zawartosc, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, $ostroznie, $uiszczaOplate, $termin, $opakowanie, $numerPrzesylkiKlienta, $numerTransakcjiOdbioru)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->subPrzesylka = $subPrzesylka;
      $this->zasadySpecjalne = $zasadySpecjalne;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->ponadgabaryt = $ponadgabaryt;
      $this->odleglosc = $odleglosc;
      $this->zawartosc = $zawartosc;
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      $this->ostroznie = $ostroznie;
      $this->uiszczaOplate = $uiszczaOplate;
      $this->termin = $termin;
      $this->opakowanie = $opakowanie;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
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
     * @return uslugaKurierskaType
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
     * @return uslugaKurierskaType
     */
    public function setOdbiorPrzesylkiOdNadawcy($odbiorPrzesylkiOdNadawcy)
    {
      $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
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
     * @return uslugaKurierskaType
     */
    public function setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
    {
      $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
      return $this;
    }

    /**
     * @return urzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
      return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * @param urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return uslugaKurierskaType
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return subUslugaKurierskaType[]
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subUslugaKurierskaType[] $subPrzesylka
     * @return uslugaKurierskaType
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
      $this->subPrzesylka = $subPrzesylka;
      return $this;
    }

    /**
     * @return potwierdzenieOdbioruKurierskaType
     */
    public function getPotwierdzenieOdbioru()
    {
      return $this->potwierdzenieOdbioru;
    }

    /**
     * @param potwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @return uslugaKurierskaType
     */
    public function setPotwierdzenieOdbioru($potwierdzenieOdbioru)
    {
      $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
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
     * @return uslugaKurierskaType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return zwrotDokumentowKurierskaType
     */
    public function getZwrotDokumentow()
    {
      return $this->zwrotDokumentow;
    }

    /**
     * @param zwrotDokumentowKurierskaType $zwrotDokumentow
     * @return uslugaKurierskaType
     */
    public function setZwrotDokumentow($zwrotDokumentow)
    {
      $this->zwrotDokumentow = $zwrotDokumentow;
      return $this;
    }

    /**
     * @return doreczenieUslugaKurierskaType
     */
    public function getDoreczenie()
    {
      return $this->doreczenie;
    }

    /**
     * @param doreczenieUslugaKurierskaType $doreczenie
     * @return uslugaKurierskaType
     */
    public function setDoreczenie($doreczenie)
    {
      $this->doreczenie = $doreczenie;
      return $this;
    }

    /**
     * @return EPOType
     */
    public function getEpo()
    {
      return $this->epo;
    }

    /**
     * @param EPOType $epo
     * @return uslugaKurierskaType
     */
    public function setEpo($epo)
    {
      $this->epo = $epo;
      return $this;
    }

    /**
     * @return zasadySpecjalneEnum
     */
    public function getZasadySpecjalne()
    {
      return $this->zasadySpecjalne;
    }

    /**
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @return uslugaKurierskaType
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
      $this->zasadySpecjalne = $zasadySpecjalne;
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
     * @return uslugaKurierskaType
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
     * @return uslugaKurierskaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
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
     * @return uslugaKurierskaType
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
      $this->ponadgabaryt = $ponadgabaryt;
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
     * @return uslugaKurierskaType
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
     * @return uslugaKurierskaType
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
     * @return uslugaKurierskaType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
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
     * @return uslugaKurierskaType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
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
     * @return uslugaKurierskaType
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      return $this;
    }

    /**
     * @return terminKurierskaType
     */
    public function getTermin()
    {
      return $this->termin;
    }

    /**
     * @param terminKurierskaType $termin
     * @return uslugaKurierskaType
     */
    public function setTermin($termin)
    {
      $this->termin = $termin;
      return $this;
    }

    /**
     * @return opakowanieKurierskaType
     */
    public function getOpakowanie()
    {
      return $this->opakowanie;
    }

    /**
     * @param opakowanieKurierskaType $opakowanie
     * @return uslugaKurierskaType
     */
    public function setOpakowanie($opakowanie)
    {
      $this->opakowanie = $opakowanie;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
      return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param string $numerPrzesylkiKlienta
     * @return uslugaKurierskaType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

    /**
     * @return numerTransakcjiOdbioruType
     */
    public function getNumerTransakcjiOdbioru()
    {
      return $this->numerTransakcjiOdbioru;
    }

    /**
     * @param numerTransakcjiOdbioruType $numerTransakcjiOdbioru
     * @return uslugaKurierskaType
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
      return $this;
    }

}
