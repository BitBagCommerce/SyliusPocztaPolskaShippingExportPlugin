<?php

class deklaracjaCelnaType
{

    /**
     * @var szczegolyDeklaracjiCelnejType[] $szczegoly
     */
    protected $szczegoly = null;

    /**
     * @var boolean $podarunek
     */
    protected $podarunek = null;

    /**
     * @var boolean $dokument
     */
    protected $dokument = null;

    /**
     * @var boolean $probkaHandlowa
     */
    protected $probkaHandlowa = null;

    /**
     * @var boolean $zwrotTowaru
     */
    protected $zwrotTowaru = null;

    /**
     * @var boolean $towary
     */
    protected $towary = null;

    /**
     * @var boolean $inny
     */
    protected $inny = null;

    /**
     * @var string $wyjasnienie
     */
    protected $wyjasnienie = null;

    /**
     * @var string $oplatyPocztowe
     */
    protected $oplatyPocztowe = null;

    /**
     * @var string $uwagi
     */
    protected $uwagi = null;

    /**
     * @var string $licencja
     */
    protected $licencja = null;

    /**
     * @var string $swiadectwo
     */
    protected $swiadectwo = null;

    /**
     * @var string $faktura
     */
    protected $faktura = null;

    /**
     * @var string $numerReferencyjnyImportera
     */
    protected $numerReferencyjnyImportera = null;

    /**
     * @var string $numerTelefonuImportera
     */
    protected $numerTelefonuImportera = null;

    /**
     * @var string $waluta
     */
    protected $waluta = null;

    /**
     * @param szczegolyDeklaracjiCelnejType[] $szczegoly
     * @param boolean $podarunek
     * @param boolean $dokument
     * @param boolean $probkaHandlowa
     * @param boolean $zwrotTowaru
     * @param boolean $towary
     * @param boolean $inny
     * @param string $wyjasnienie
     * @param string $oplatyPocztowe
     * @param string $uwagi
     * @param string $licencja
     * @param string $swiadectwo
     * @param string $faktura
     * @param string $numerReferencyjnyImportera
     * @param string $numerTelefonuImportera
     * @param string $waluta
     */
    public function __construct(array $szczegoly, $podarunek, $dokument, $probkaHandlowa, $zwrotTowaru, $towary, $inny, $wyjasnienie, $oplatyPocztowe, $uwagi, $licencja, $swiadectwo, $faktura, $numerReferencyjnyImportera, $numerTelefonuImportera, $waluta)
    {
      $this->szczegoly = $szczegoly;
      $this->podarunek = $podarunek;
      $this->dokument = $dokument;
      $this->probkaHandlowa = $probkaHandlowa;
      $this->zwrotTowaru = $zwrotTowaru;
      $this->towary = $towary;
      $this->inny = $inny;
      $this->wyjasnienie = $wyjasnienie;
      $this->oplatyPocztowe = $oplatyPocztowe;
      $this->uwagi = $uwagi;
      $this->licencja = $licencja;
      $this->swiadectwo = $swiadectwo;
      $this->faktura = $faktura;
      $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;
      $this->numerTelefonuImportera = $numerTelefonuImportera;
      $this->waluta = $waluta;
    }

    /**
     * @return szczegolyDeklaracjiCelnejType[]
     */
    public function getSzczegoly()
    {
      return $this->szczegoly;
    }

    /**
     * @param szczegolyDeklaracjiCelnejType[] $szczegoly
     * @return deklaracjaCelnaType
     */
    public function setSzczegoly(array $szczegoly)
    {
      $this->szczegoly = $szczegoly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPodarunek()
    {
      return $this->podarunek;
    }

    /**
     * @param boolean $podarunek
     * @return deklaracjaCelnaType
     */
    public function setPodarunek($podarunek)
    {
      $this->podarunek = $podarunek;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDokument()
    {
      return $this->dokument;
    }

    /**
     * @param boolean $dokument
     * @return deklaracjaCelnaType
     */
    public function setDokument($dokument)
    {
      $this->dokument = $dokument;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProbkaHandlowa()
    {
      return $this->probkaHandlowa;
    }

    /**
     * @param boolean $probkaHandlowa
     * @return deklaracjaCelnaType
     */
    public function setProbkaHandlowa($probkaHandlowa)
    {
      $this->probkaHandlowa = $probkaHandlowa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZwrotTowaru()
    {
      return $this->zwrotTowaru;
    }

    /**
     * @param boolean $zwrotTowaru
     * @return deklaracjaCelnaType
     */
    public function setZwrotTowaru($zwrotTowaru)
    {
      $this->zwrotTowaru = $zwrotTowaru;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTowary()
    {
      return $this->towary;
    }

    /**
     * @param boolean $towary
     * @return deklaracjaCelnaType
     */
    public function setTowary($towary)
    {
      $this->towary = $towary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInny()
    {
      return $this->inny;
    }

    /**
     * @param boolean $inny
     * @return deklaracjaCelnaType
     */
    public function setInny($inny)
    {
      $this->inny = $inny;
      return $this;
    }

    /**
     * @return string
     */
    public function getWyjasnienie()
    {
      return $this->wyjasnienie;
    }

    /**
     * @param string $wyjasnienie
     * @return deklaracjaCelnaType
     */
    public function setWyjasnienie($wyjasnienie)
    {
      $this->wyjasnienie = $wyjasnienie;
      return $this;
    }

    /**
     * @return string
     */
    public function getOplatyPocztowe()
    {
      return $this->oplatyPocztowe;
    }

    /**
     * @param string $oplatyPocztowe
     * @return deklaracjaCelnaType
     */
    public function setOplatyPocztowe($oplatyPocztowe)
    {
      $this->oplatyPocztowe = $oplatyPocztowe;
      return $this;
    }

    /**
     * @return string
     */
    public function getUwagi()
    {
      return $this->uwagi;
    }

    /**
     * @param string $uwagi
     * @return deklaracjaCelnaType
     */
    public function setUwagi($uwagi)
    {
      $this->uwagi = $uwagi;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicencja()
    {
      return $this->licencja;
    }

    /**
     * @param string $licencja
     * @return deklaracjaCelnaType
     */
    public function setLicencja($licencja)
    {
      $this->licencja = $licencja;
      return $this;
    }

    /**
     * @return string
     */
    public function getSwiadectwo()
    {
      return $this->swiadectwo;
    }

    /**
     * @param string $swiadectwo
     * @return deklaracjaCelnaType
     */
    public function setSwiadectwo($swiadectwo)
    {
      $this->swiadectwo = $swiadectwo;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaktura()
    {
      return $this->faktura;
    }

    /**
     * @param string $faktura
     * @return deklaracjaCelnaType
     */
    public function setFaktura($faktura)
    {
      $this->faktura = $faktura;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerReferencyjnyImportera()
    {
      return $this->numerReferencyjnyImportera;
    }

    /**
     * @param string $numerReferencyjnyImportera
     * @return deklaracjaCelnaType
     */
    public function setNumerReferencyjnyImportera($numerReferencyjnyImportera)
    {
      $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerTelefonuImportera()
    {
      return $this->numerTelefonuImportera;
    }

    /**
     * @param string $numerTelefonuImportera
     * @return deklaracjaCelnaType
     */
    public function setNumerTelefonuImportera($numerTelefonuImportera)
    {
      $this->numerTelefonuImportera = $numerTelefonuImportera;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaluta()
    {
      return $this->waluta;
    }

    /**
     * @param string $waluta
     * @return deklaracjaCelnaType
     */
    public function setWaluta($waluta)
    {
      $this->waluta = $waluta;
      return $this;
    }

}
