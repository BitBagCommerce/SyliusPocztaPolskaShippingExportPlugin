<?php

class infoPaczkaKorzysciType
{

    /**
     * @var int $iloscStandardDo5kg
     */
    protected $iloscStandardDo5kg = null;

    /**
     * @var int $iloscPobranieDo5kg
     */
    protected $iloscPobranieDo5kg = null;

    /**
     * @var int $iloscOdbiorWPunkcieDo5kg
     */
    protected $iloscOdbiorWPunkcieDo5kg = null;

    /**
     * @var int $iloscPobranieOdbiorWPunkcieDo5kg
     */
    protected $iloscPobranieOdbiorWPunkcieDo5kg = null;

    /**
     * @var int $iloscStandardDo30kg
     */
    protected $iloscStandardDo30kg = null;

    /**
     * @var int $iloscPobranieDo30kg
     */
    protected $iloscPobranieDo30kg = null;

    /**
     * @var int $iloscOdbiorWPunkcieDo30kg
     */
    protected $iloscOdbiorWPunkcieDo30kg = null;

    /**
     * @var int $iloscPobranieOdbiorWPunkcieDo30kg
     */
    protected $iloscPobranieOdbiorWPunkcieDo30kg = null;

    /**
     * @var date $dataWaznosciUmowy
     */
    protected $dataWaznosciUmowy = null;

    /**
     * @param int $iloscStandardDo5kg
     * @param int $iloscPobranieDo5kg
     * @param int $iloscOdbiorWPunkcieDo5kg
     * @param int $iloscPobranieOdbiorWPunkcieDo5kg
     * @param int $iloscStandardDo30kg
     * @param int $iloscPobranieDo30kg
     * @param int $iloscOdbiorWPunkcieDo30kg
     * @param int $iloscPobranieOdbiorWPunkcieDo30kg
     * @param date $dataWaznosciUmowy
     */
    public function __construct($iloscStandardDo5kg, $iloscPobranieDo5kg, $iloscOdbiorWPunkcieDo5kg, $iloscPobranieOdbiorWPunkcieDo5kg, $iloscStandardDo30kg, $iloscPobranieDo30kg, $iloscOdbiorWPunkcieDo30kg, $iloscPobranieOdbiorWPunkcieDo30kg, $dataWaznosciUmowy)
    {
      $this->iloscStandardDo5kg = $iloscStandardDo5kg;
      $this->iloscPobranieDo5kg = $iloscPobranieDo5kg;
      $this->iloscOdbiorWPunkcieDo5kg = $iloscOdbiorWPunkcieDo5kg;
      $this->iloscPobranieOdbiorWPunkcieDo5kg = $iloscPobranieOdbiorWPunkcieDo5kg;
      $this->iloscStandardDo30kg = $iloscStandardDo30kg;
      $this->iloscPobranieDo30kg = $iloscPobranieDo30kg;
      $this->iloscOdbiorWPunkcieDo30kg = $iloscOdbiorWPunkcieDo30kg;
      $this->iloscPobranieOdbiorWPunkcieDo30kg = $iloscPobranieOdbiorWPunkcieDo30kg;
      $this->dataWaznosciUmowy = $dataWaznosciUmowy;
    }

    /**
     * @return int
     */
    public function getIloscStandardDo5kg()
    {
      return $this->iloscStandardDo5kg;
    }

    /**
     * @param int $iloscStandardDo5kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscStandardDo5kg($iloscStandardDo5kg)
    {
      $this->iloscStandardDo5kg = $iloscStandardDo5kg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscPobranieDo5kg()
    {
      return $this->iloscPobranieDo5kg;
    }

    /**
     * @param int $iloscPobranieDo5kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscPobranieDo5kg($iloscPobranieDo5kg)
    {
      $this->iloscPobranieDo5kg = $iloscPobranieDo5kg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscOdbiorWPunkcieDo5kg()
    {
      return $this->iloscOdbiorWPunkcieDo5kg;
    }

    /**
     * @param int $iloscOdbiorWPunkcieDo5kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscOdbiorWPunkcieDo5kg($iloscOdbiorWPunkcieDo5kg)
    {
      $this->iloscOdbiorWPunkcieDo5kg = $iloscOdbiorWPunkcieDo5kg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscPobranieOdbiorWPunkcieDo5kg()
    {
      return $this->iloscPobranieOdbiorWPunkcieDo5kg;
    }

    /**
     * @param int $iloscPobranieOdbiorWPunkcieDo5kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscPobranieOdbiorWPunkcieDo5kg($iloscPobranieOdbiorWPunkcieDo5kg)
    {
      $this->iloscPobranieOdbiorWPunkcieDo5kg = $iloscPobranieOdbiorWPunkcieDo5kg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscStandardDo30kg()
    {
      return $this->iloscStandardDo30kg;
    }

    /**
     * @param int $iloscStandardDo30kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscStandardDo30kg($iloscStandardDo30kg)
    {
      $this->iloscStandardDo30kg = $iloscStandardDo30kg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscPobranieDo30kg()
    {
      return $this->iloscPobranieDo30kg;
    }

    /**
     * @param int $iloscPobranieDo30kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscPobranieDo30kg($iloscPobranieDo30kg)
    {
      $this->iloscPobranieDo30kg = $iloscPobranieDo30kg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscOdbiorWPunkcieDo30kg()
    {
      return $this->iloscOdbiorWPunkcieDo30kg;
    }

    /**
     * @param int $iloscOdbiorWPunkcieDo30kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscOdbiorWPunkcieDo30kg($iloscOdbiorWPunkcieDo30kg)
    {
      $this->iloscOdbiorWPunkcieDo30kg = $iloscOdbiorWPunkcieDo30kg;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscPobranieOdbiorWPunkcieDo30kg()
    {
      return $this->iloscPobranieOdbiorWPunkcieDo30kg;
    }

    /**
     * @param int $iloscPobranieOdbiorWPunkcieDo30kg
     * @return infoPaczkaKorzysciType
     */
    public function setIloscPobranieOdbiorWPunkcieDo30kg($iloscPobranieOdbiorWPunkcieDo30kg)
    {
      $this->iloscPobranieOdbiorWPunkcieDo30kg = $iloscPobranieOdbiorWPunkcieDo30kg;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataWaznosciUmowy()
    {
      return $this->dataWaznosciUmowy;
    }

    /**
     * @param date $dataWaznosciUmowy
     * @return infoPaczkaKorzysciType
     */
    public function setDataWaznosciUmowy($dataWaznosciUmowy)
    {
      $this->dataWaznosciUmowy = $dataWaznosciUmowy;
      return $this;
    }

}
