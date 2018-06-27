<?php

class statusZgodyEZwrotType
{

    /**
     * @var eZwrotPrzesylkiType[] $eZwrotPrzesylki
     */
    protected $eZwrotPrzesylki = null;

    /**
     * @var guidType $guidZgodaEZwrot
     */
    protected $guidZgodaEZwrot = null;

    /**
     * @var statusZgodyEZwrotNameType $status
     */
    protected $status = null;

    /**
     * @var boolean $platnoscZaPrzesylke
     */
    protected $platnoscZaPrzesylke = null;

    /**
     * @var int $kosztKontrahenta
     */
    protected $kosztKontrahenta = null;

    /**
     * @var date $dataWygasnieciaZgody
     */
    protected $dataWygasnieciaZgody = null;

    /**
     * @param eZwrotPrzesylkiType[] $eZwrotPrzesylki
     * @param guidType $guidZgodaEZwrot
     * @param statusZgodyEZwrotNameType $status
     * @param boolean $platnoscZaPrzesylke
     * @param int $kosztKontrahenta
     * @param date $dataWygasnieciaZgody
     */
    public function __construct(array $eZwrotPrzesylki, $guidZgodaEZwrot, $status, $platnoscZaPrzesylke, $kosztKontrahenta, $dataWygasnieciaZgody)
    {
      $this->eZwrotPrzesylki = $eZwrotPrzesylki;
      $this->guidZgodaEZwrot = $guidZgodaEZwrot;
      $this->status = $status;
      $this->platnoscZaPrzesylke = $platnoscZaPrzesylke;
      $this->kosztKontrahenta = $kosztKontrahenta;
      $this->dataWygasnieciaZgody = $dataWygasnieciaZgody;
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
     * @return statusZgodyEZwrotType
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki)
    {
      $this->eZwrotPrzesylki = $eZwrotPrzesylki;
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
     * @return statusZgodyEZwrotType
     */
    public function setGuidZgodaEZwrot($guidZgodaEZwrot)
    {
      $this->guidZgodaEZwrot = $guidZgodaEZwrot;
      return $this;
    }

    /**
     * @return statusZgodyEZwrotNameType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusZgodyEZwrotNameType $status
     * @return statusZgodyEZwrotType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPlatnoscZaPrzesylke()
    {
      return $this->platnoscZaPrzesylke;
    }

    /**
     * @param boolean $platnoscZaPrzesylke
     * @return statusZgodyEZwrotType
     */
    public function setPlatnoscZaPrzesylke($platnoscZaPrzesylke)
    {
      $this->platnoscZaPrzesylke = $platnoscZaPrzesylke;
      return $this;
    }

    /**
     * @return int
     */
    public function getKosztKontrahenta()
    {
      return $this->kosztKontrahenta;
    }

    /**
     * @param int $kosztKontrahenta
     * @return statusZgodyEZwrotType
     */
    public function setKosztKontrahenta($kosztKontrahenta)
    {
      $this->kosztKontrahenta = $kosztKontrahenta;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataWygasnieciaZgody()
    {
      return $this->dataWygasnieciaZgody;
    }

    /**
     * @param date $dataWygasnieciaZgody
     * @return statusZgodyEZwrotType
     */
    public function setDataWygasnieciaZgody($dataWygasnieciaZgody)
    {
      $this->dataWygasnieciaZgody = $dataWygasnieciaZgody;
      return $this;
    }

}
