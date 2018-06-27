<?php

class uslugaPaczkowaType extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var subUslugaPaczkowaType[] $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var potwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var zwrotDokumentowPaczkowaType $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * @var doreczenieUslugaPocztowaType $doreczenie
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
     * @var terminPaczkowaType $termin
     */
    protected $termin = null;

    /**
     * @var opakowaniePocztowaType $opakowanie
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
     * @var gabarytType $gabaryt
     */
    protected $gabaryt = null;

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
     * @param subUslugaPaczkowaType[] $subPrzesylka
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param boolean $ponadgabaryt
     * @param string $zawartosc
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param boolean $ostroznie
     * @param uiszczaOplateType $uiszczaOplate
     * @param terminPaczkowaType $termin
     * @param opakowaniePocztowaType $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param numerTransakcjiOdbioruType $numerTransakcjiOdbioru
     * @param gabarytType $gabaryt
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, array $subPrzesylka, $zasadySpecjalne, $masa, $wartosc, $ponadgabaryt, $zawartosc, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, $ostroznie, $uiszczaOplate, $termin, $opakowanie, $numerPrzesylkiKlienta, $numerTransakcjiOdbioru, $gabaryt)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->subPrzesylka = $subPrzesylka;
      $this->zasadySpecjalne = $zasadySpecjalne;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->ponadgabaryt = $ponadgabaryt;
      $this->zawartosc = $zawartosc;
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      $this->ostroznie = $ostroznie;
      $this->uiszczaOplate = $uiszczaOplate;
      $this->termin = $termin;
      $this->opakowanie = $opakowanie;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
      $this->gabaryt = $gabaryt;
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
     * @return uslugaPaczkowaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return subUslugaPaczkowaType[]
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subUslugaPaczkowaType[] $subPrzesylka
     * @return uslugaPaczkowaType
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
      $this->subPrzesylka = $subPrzesylka;
      return $this;
    }

    /**
     * @return potwierdzenieOdbioruPaczkowaType
     */
    public function getPotwierdzenieOdbioru()
    {
      return $this->potwierdzenieOdbioru;
    }

    /**
     * @param potwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return zwrotDokumentowPaczkowaType
     */
    public function getZwrotDokumentow()
    {
      return $this->zwrotDokumentow;
    }

    /**
     * @param zwrotDokumentowPaczkowaType $zwrotDokumentow
     * @return uslugaPaczkowaType
     */
    public function setZwrotDokumentow($zwrotDokumentow)
    {
      $this->zwrotDokumentow = $zwrotDokumentow;
      return $this;
    }

    /**
     * @return doreczenieUslugaPocztowaType
     */
    public function getDoreczenie()
    {
      return $this->doreczenie;
    }

    /**
     * @param doreczenieUslugaPocztowaType $doreczenie
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
      $this->ponadgabaryt = $ponadgabaryt;
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      return $this;
    }

    /**
     * @return terminPaczkowaType
     */
    public function getTermin()
    {
      return $this->termin;
    }

    /**
     * @param terminPaczkowaType $termin
     * @return uslugaPaczkowaType
     */
    public function setTermin($termin)
    {
      $this->termin = $termin;
      return $this;
    }

    /**
     * @return opakowaniePocztowaType
     */
    public function getOpakowanie()
    {
      return $this->opakowanie;
    }

    /**
     * @param opakowaniePocztowaType $opakowanie
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
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
     * @return uslugaPaczkowaType
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
      return $this;
    }

    /**
     * @return gabarytType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytType $gabaryt
     * @return uslugaPaczkowaType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
      return $this;
    }

}
