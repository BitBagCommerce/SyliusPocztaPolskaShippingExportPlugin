<?php

class przesylkaBiznesowaType extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var subPrzesylkaBiznesowaType[] $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

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
     * @var gabarytBiznesowaType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

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
     * @param subPrzesylkaBiznesowaType[] $subPrzesylka
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @param masaType $masa
     * @param gabarytBiznesowaType $gabaryt
     * @param wartoscType $wartosc
     * @param boolean $ostroznie
     * @param numerTransakcjiOdbioruType $numerTransakcjiOdbioru
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, array $subPrzesylka, $zasadySpecjalne, $masa, $gabaryt, $wartosc, $ostroznie, $numerTransakcjiOdbioru)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->subPrzesylka = $subPrzesylka;
      $this->zasadySpecjalne = $zasadySpecjalne;
      $this->masa = $masa;
      $this->gabaryt = $gabaryt;
      $this->wartosc = $wartosc;
      $this->ostroznie = $ostroznie;
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
     * @return przesylkaBiznesowaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
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
     * @return przesylkaBiznesowaType
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return subPrzesylkaBiznesowaType[]
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subPrzesylkaBiznesowaType[] $subPrzesylka
     * @return przesylkaBiznesowaType
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
      $this->subPrzesylka = $subPrzesylka;
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
     * @return przesylkaBiznesowaType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
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
     * @return przesylkaBiznesowaType
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
     * @return przesylkaBiznesowaType
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
     * @return przesylkaBiznesowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return gabarytBiznesowaType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytBiznesowaType $gabaryt
     * @return przesylkaBiznesowaType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
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
     * @return przesylkaBiznesowaType
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
     * @return przesylkaBiznesowaType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
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
     * @return przesylkaBiznesowaType
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
      return $this;
    }

}
