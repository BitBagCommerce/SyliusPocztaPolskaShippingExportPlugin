<?php

class przesylkaPaletowaType extends przesylkaRejestrowanaType
{

    /**
     * @var adresType $miejsceOdbioru
     */
    protected $miejsceOdbioru = null;

    /**
     * @var adresType $miejsceDoreczenia
     */
    protected $miejsceDoreczenia = null;

    /**
     * @var paletaType $paleta
     */
    protected $paleta = null;

    /**
     * @var platnikType $platnik
     */
    protected $platnik = null;

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var subPrzesylkaPaletowaType[] $subPaleta
     */
    protected $subPaleta = null;

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var date $dataZaladunku
     */
    protected $dataZaladunku = null;

    /**
     * @var date $dataDostawy
     */
    protected $dataDostawy = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var int $iloscZwracanychPaletEUR
     */
    protected $iloscZwracanychPaletEUR = null;

    /**
     * @var string $zalaczonaFV
     */
    protected $zalaczonaFV = null;

    /**
     * @var string $zalaczonyWZ
     */
    protected $zalaczonyWZ = null;

    /**
     * @var string $zalaczoneInne
     */
    protected $zalaczoneInne = null;

    /**
     * @var string $zwracanaFV
     */
    protected $zwracanaFV = null;

    /**
     * @var string $zwracanyWZ
     */
    protected $zwracanyWZ = null;

    /**
     * @var string $zwracaneInne
     */
    protected $zwracaneInne = null;

    /**
     * @var string $powiadomienieNadawcy
     */
    protected $powiadomienieNadawcy = null;

    /**
     * @var eSposobPowiadomieniaType $powiadomienieOdbiorcy
     */
    protected $powiadomienieOdbiorcy = null;

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
     * @param paletaType $paleta
     * @param platnikType $platnik
     * @param string $zawartosc
     * @param masaType $masa
     * @param date $dataZaladunku
     * @param date $dataDostawy
     * @param wartoscType $wartosc
     * @param int $iloscZwracanychPaletEUR
     * @param string $zalaczonaFV
     * @param string $zalaczonyWZ
     * @param string $zalaczoneInne
     * @param string $zwracanaFV
     * @param string $zwracanyWZ
     * @param string $zwracaneInne
     * @param string $powiadomienieNadawcy
     * @param eSposobPowiadomieniaType $powiadomienieOdbiorcy
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $paleta, $platnik, $zawartosc, $masa, $dataZaladunku, $dataDostawy, $wartosc, $iloscZwracanychPaletEUR, $zalaczonaFV, $zalaczonyWZ, $zalaczoneInne, $zwracanaFV, $zwracanyWZ, $zwracaneInne, $powiadomienieNadawcy, $powiadomienieOdbiorcy)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $sygnatura, $terminSprawy, $rodzaj);
      $this->paleta = $paleta;
      $this->platnik = $platnik;
      $this->zawartosc = $zawartosc;
      $this->masa = $masa;
      $this->dataZaladunku = $dataZaladunku;
      $this->dataDostawy = $dataDostawy;
      $this->wartosc = $wartosc;
      $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
      $this->zalaczonaFV = $zalaczonaFV;
      $this->zalaczonyWZ = $zalaczonyWZ;
      $this->zalaczoneInne = $zalaczoneInne;
      $this->zwracanaFV = $zwracanaFV;
      $this->zwracanyWZ = $zwracanyWZ;
      $this->zwracaneInne = $zwracaneInne;
      $this->powiadomienieNadawcy = $powiadomienieNadawcy;
      $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
    }

    /**
     * @return adresType
     */
    public function getMiejsceOdbioru()
    {
      return $this->miejsceOdbioru;
    }

    /**
     * @param adresType $miejsceOdbioru
     * @return przesylkaPaletowaType
     */
    public function setMiejsceOdbioru($miejsceOdbioru)
    {
      $this->miejsceOdbioru = $miejsceOdbioru;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getMiejsceDoreczenia()
    {
      return $this->miejsceDoreczenia;
    }

    /**
     * @param adresType $miejsceDoreczenia
     * @return przesylkaPaletowaType
     */
    public function setMiejsceDoreczenia($miejsceDoreczenia)
    {
      $this->miejsceDoreczenia = $miejsceDoreczenia;
      return $this;
    }

    /**
     * @return paletaType
     */
    public function getPaleta()
    {
      return $this->paleta;
    }

    /**
     * @param paletaType $paleta
     * @return przesylkaPaletowaType
     */
    public function setPaleta($paleta)
    {
      $this->paleta = $paleta;
      return $this;
    }

    /**
     * @return platnikType
     */
    public function getPlatnik()
    {
      return $this->platnik;
    }

    /**
     * @param platnikType $platnik
     * @return przesylkaPaletowaType
     */
    public function setPlatnik($platnik)
    {
      $this->platnik = $platnik;
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
     * @return przesylkaPaletowaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return subPrzesylkaPaletowaType[]
     */
    public function getSubPaleta()
    {
      return $this->subPaleta;
    }

    /**
     * @param subPrzesylkaPaletowaType[] $subPaleta
     * @return przesylkaPaletowaType
     */
    public function setSubPaleta(array $subPaleta = null)
    {
      $this->subPaleta = $subPaleta;
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
     * @return przesylkaPaletowaType
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
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
     * @return przesylkaPaletowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataZaladunku()
    {
      return $this->dataZaladunku;
    }

    /**
     * @param date $dataZaladunku
     * @return przesylkaPaletowaType
     */
    public function setDataZaladunku($dataZaladunku)
    {
      $this->dataZaladunku = $dataZaladunku;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataDostawy()
    {
      return $this->dataDostawy;
    }

    /**
     * @param date $dataDostawy
     * @return przesylkaPaletowaType
     */
    public function setDataDostawy($dataDostawy)
    {
      $this->dataDostawy = $dataDostawy;
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
     * @return przesylkaPaletowaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscZwracanychPaletEUR()
    {
      return $this->iloscZwracanychPaletEUR;
    }

    /**
     * @param int $iloscZwracanychPaletEUR
     * @return przesylkaPaletowaType
     */
    public function setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
    {
      $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
      return $this;
    }

    /**
     * @return string
     */
    public function getZalaczonaFV()
    {
      return $this->zalaczonaFV;
    }

    /**
     * @param string $zalaczonaFV
     * @return przesylkaPaletowaType
     */
    public function setZalaczonaFV($zalaczonaFV)
    {
      $this->zalaczonaFV = $zalaczonaFV;
      return $this;
    }

    /**
     * @return string
     */
    public function getZalaczonyWZ()
    {
      return $this->zalaczonyWZ;
    }

    /**
     * @param string $zalaczonyWZ
     * @return przesylkaPaletowaType
     */
    public function setZalaczonyWZ($zalaczonyWZ)
    {
      $this->zalaczonyWZ = $zalaczonyWZ;
      return $this;
    }

    /**
     * @return string
     */
    public function getZalaczoneInne()
    {
      return $this->zalaczoneInne;
    }

    /**
     * @param string $zalaczoneInne
     * @return przesylkaPaletowaType
     */
    public function setZalaczoneInne($zalaczoneInne)
    {
      $this->zalaczoneInne = $zalaczoneInne;
      return $this;
    }

    /**
     * @return string
     */
    public function getZwracanaFV()
    {
      return $this->zwracanaFV;
    }

    /**
     * @param string $zwracanaFV
     * @return przesylkaPaletowaType
     */
    public function setZwracanaFV($zwracanaFV)
    {
      $this->zwracanaFV = $zwracanaFV;
      return $this;
    }

    /**
     * @return string
     */
    public function getZwracanyWZ()
    {
      return $this->zwracanyWZ;
    }

    /**
     * @param string $zwracanyWZ
     * @return przesylkaPaletowaType
     */
    public function setZwracanyWZ($zwracanyWZ)
    {
      $this->zwracanyWZ = $zwracanyWZ;
      return $this;
    }

    /**
     * @return string
     */
    public function getZwracaneInne()
    {
      return $this->zwracaneInne;
    }

    /**
     * @param string $zwracaneInne
     * @return przesylkaPaletowaType
     */
    public function setZwracaneInne($zwracaneInne)
    {
      $this->zwracaneInne = $zwracaneInne;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowiadomienieNadawcy()
    {
      return $this->powiadomienieNadawcy;
    }

    /**
     * @param string $powiadomienieNadawcy
     * @return przesylkaPaletowaType
     */
    public function setPowiadomienieNadawcy($powiadomienieNadawcy)
    {
      $this->powiadomienieNadawcy = $powiadomienieNadawcy;
      return $this;
    }

    /**
     * @return eSposobPowiadomieniaType
     */
    public function getPowiadomienieOdbiorcy()
    {
      return $this->powiadomienieOdbiorcy;
    }

    /**
     * @param eSposobPowiadomieniaType $powiadomienieOdbiorcy
     * @return przesylkaPaletowaType
     */
    public function setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
    {
      $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
      return $this;
    }

}
