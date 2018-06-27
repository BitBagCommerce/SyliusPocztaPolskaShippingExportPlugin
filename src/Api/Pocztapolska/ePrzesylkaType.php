<?php

class ePrzesylkaType extends przesylkaRejestrowanaType
{

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var eSposobPowiadomieniaType $eSposobPowiadomieniaAdresata
     */
    protected $eSposobPowiadomieniaAdresata = null;

    /**
     * @var eSposobPowiadomieniaType $eSposobPowiadomieniaNadawcy
     */
    protected $eSposobPowiadomieniaNadawcy = null;

    /**
     * @var eKontaktType $eKontaktAdresata
     */
    protected $eKontaktAdresata = null;

    /**
     * @var eKontaktType $eKontaktNadawcy
     */
    protected $eKontaktNadawcy = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

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
     * @param urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param masaType $masa
     * @param eSposobPowiadomieniaType $eSposobPowiadomieniaAdresata
     * @param eSposobPowiadomieniaType $eSposobPowiadomieniaNadawcy
     * @param eKontaktType $eKontaktAdresata
     * @param eKontaktType $eKontaktNadawcy
     * @param boolean $ostroznie
     * @param wartoscType $wartosc
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $urzadWydaniaEPrzesylki, $masa, $eSposobPowiadomieniaAdresata, $eSposobPowiadomieniaNadawcy, $eKontaktAdresata, $eKontaktNadawcy, $ostroznie, $wartosc)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      $this->masa = $masa;
      $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
      $this->eSposobPowiadomieniaNadawcy = $eSposobPowiadomieniaNadawcy;
      $this->eKontaktAdresata = $eKontaktAdresata;
      $this->eKontaktNadawcy = $eKontaktNadawcy;
      $this->ostroznie = $ostroznie;
      $this->wartosc = $wartosc;
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
     * @return ePrzesylkaType
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
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
     * @return ePrzesylkaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
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
     * @return ePrzesylkaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return eSposobPowiadomieniaType
     */
    public function getESposobPowiadomieniaAdresata()
    {
      return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * @param eSposobPowiadomieniaType $eSposobPowiadomieniaAdresata
     * @return ePrzesylkaType
     */
    public function setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
    {
      $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
      return $this;
    }

    /**
     * @return eSposobPowiadomieniaType
     */
    public function getESposobPowiadomieniaNadawcy()
    {
      return $this->eSposobPowiadomieniaNadawcy;
    }

    /**
     * @param eSposobPowiadomieniaType $eSposobPowiadomieniaNadawcy
     * @return ePrzesylkaType
     */
    public function setESposobPowiadomieniaNadawcy($eSposobPowiadomieniaNadawcy)
    {
      $this->eSposobPowiadomieniaNadawcy = $eSposobPowiadomieniaNadawcy;
      return $this;
    }

    /**
     * @return eKontaktType
     */
    public function getEKontaktAdresata()
    {
      return $this->eKontaktAdresata;
    }

    /**
     * @param eKontaktType $eKontaktAdresata
     * @return ePrzesylkaType
     */
    public function setEKontaktAdresata($eKontaktAdresata)
    {
      $this->eKontaktAdresata = $eKontaktAdresata;
      return $this;
    }

    /**
     * @return eKontaktType
     */
    public function getEKontaktNadawcy()
    {
      return $this->eKontaktNadawcy;
    }

    /**
     * @param eKontaktType $eKontaktNadawcy
     * @return ePrzesylkaType
     */
    public function setEKontaktNadawcy($eKontaktNadawcy)
    {
      $this->eKontaktNadawcy = $eKontaktNadawcy;
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
     * @return ePrzesylkaType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
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
     * @return ePrzesylkaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

}
