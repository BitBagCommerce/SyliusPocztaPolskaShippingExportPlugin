<?php

class doreczeniePrzesylkiType
{

    /**
     * @var \DateTime $data
     */
    protected $data = null;

    /**
     * @var string $osobaOdbierajaca
     */
    protected $osobaOdbierajaca = null;

    /**
     * @var podmiotDoreczeniaEnum $podmiotDoreczenia
     */
    protected $podmiotDoreczenia = null;

    /**
     * @var date $dataPelnomocnictwa
     */
    protected $dataPelnomocnictwa = null;

    /**
     * @var string $numerPelnomocnictwa
     */
    protected $numerPelnomocnictwa = null;

    /**
     * @var boolean $pieczecFirmowa
     */
    protected $pieczecFirmowa = null;

    /**
     * @var miejscePozostawieniaZawiadomieniaODoreczeniuEnum $miejscePozostawieniaZawiadomieniaODoreczeniu
     */
    protected $miejscePozostawieniaZawiadomieniaODoreczeniu = null;

    /**
     * @param \DateTime $data
     * @param string $osobaOdbierajaca
     * @param podmiotDoreczeniaEnum $podmiotDoreczenia
     * @param date $dataPelnomocnictwa
     * @param string $numerPelnomocnictwa
     * @param boolean $pieczecFirmowa
     * @param miejscePozostawieniaZawiadomieniaODoreczeniuEnum $miejscePozostawieniaZawiadomieniaODoreczeniu
     */
    public function __construct(\DateTime $data, $osobaOdbierajaca, $podmiotDoreczenia, $dataPelnomocnictwa, $numerPelnomocnictwa, $pieczecFirmowa, $miejscePozostawieniaZawiadomieniaODoreczeniu)
    {
      $this->data = $data->format(\DateTime::ATOM);
      $this->osobaOdbierajaca = $osobaOdbierajaca;
      $this->podmiotDoreczenia = $podmiotDoreczenia;
      $this->dataPelnomocnictwa = $dataPelnomocnictwa;
      $this->numerPelnomocnictwa = $numerPelnomocnictwa;
      $this->pieczecFirmowa = $pieczecFirmowa;
      $this->miejscePozostawieniaZawiadomieniaODoreczeniu = $miejscePozostawieniaZawiadomieniaODoreczeniu;
    }

    /**
     * @return \DateTime
     */
    public function getData()
    {
      if ($this->data == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->data);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $data
     * @return doreczeniePrzesylkiType
     */
    public function setData(\DateTime $data)
    {
      $this->data = $data->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getOsobaOdbierajaca()
    {
      return $this->osobaOdbierajaca;
    }

    /**
     * @param string $osobaOdbierajaca
     * @return doreczeniePrzesylkiType
     */
    public function setOsobaOdbierajaca($osobaOdbierajaca)
    {
      $this->osobaOdbierajaca = $osobaOdbierajaca;
      return $this;
    }

    /**
     * @return podmiotDoreczeniaEnum
     */
    public function getPodmiotDoreczenia()
    {
      return $this->podmiotDoreczenia;
    }

    /**
     * @param podmiotDoreczeniaEnum $podmiotDoreczenia
     * @return doreczeniePrzesylkiType
     */
    public function setPodmiotDoreczenia($podmiotDoreczenia)
    {
      $this->podmiotDoreczenia = $podmiotDoreczenia;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataPelnomocnictwa()
    {
      return $this->dataPelnomocnictwa;
    }

    /**
     * @param date $dataPelnomocnictwa
     * @return doreczeniePrzesylkiType
     */
    public function setDataPelnomocnictwa($dataPelnomocnictwa)
    {
      $this->dataPelnomocnictwa = $dataPelnomocnictwa;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerPelnomocnictwa()
    {
      return $this->numerPelnomocnictwa;
    }

    /**
     * @param string $numerPelnomocnictwa
     * @return doreczeniePrzesylkiType
     */
    public function setNumerPelnomocnictwa($numerPelnomocnictwa)
    {
      $this->numerPelnomocnictwa = $numerPelnomocnictwa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPieczecFirmowa()
    {
      return $this->pieczecFirmowa;
    }

    /**
     * @param boolean $pieczecFirmowa
     * @return doreczeniePrzesylkiType
     */
    public function setPieczecFirmowa($pieczecFirmowa)
    {
      $this->pieczecFirmowa = $pieczecFirmowa;
      return $this;
    }

    /**
     * @return miejscePozostawieniaZawiadomieniaODoreczeniuEnum
     */
    public function getMiejscePozostawieniaZawiadomieniaODoreczeniu()
    {
      return $this->miejscePozostawieniaZawiadomieniaODoreczeniu;
    }

    /**
     * @param miejscePozostawieniaZawiadomieniaODoreczeniuEnum $miejscePozostawieniaZawiadomieniaODoreczeniu
     * @return doreczeniePrzesylkiType
     */
    public function setMiejscePozostawieniaZawiadomieniaODoreczeniu($miejscePozostawieniaZawiadomieniaODoreczeniu)
    {
      $this->miejscePozostawieniaZawiadomieniaODoreczeniu = $miejscePozostawieniaZawiadomieniaODoreczeniu;
      return $this;
    }

}
