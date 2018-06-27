<?php

class zamowKuriera
{

    /**
     * @var adresType $miejsceOdbioru
     */
    protected $miejsceOdbioru = null;

    /**
     * @var adresType $nadawca
     */
    protected $nadawca = null;

    /**
     * @var string $oczekiwanaDataOdbioru
     */
    protected $oczekiwanaDataOdbioru = null;

    /**
     * @var string $oczekiwanaGodzinaOdbioru
     */
    protected $oczekiwanaGodzinaOdbioru = null;

    /**
     * @var string $szacowanaIloscPrzeslek
     */
    protected $szacowanaIloscPrzeslek = null;

    /**
     * @var string $szacowanaLacznaMasaPrzesylek
     */
    protected $szacowanaLacznaMasaPrzesylek = null;

    /**
     * @param adresType $miejsceOdbioru
     * @param adresType $nadawca
     * @param string $oczekiwanaDataOdbioru
     * @param string $oczekiwanaGodzinaOdbioru
     * @param string $szacowanaIloscPrzeslek
     * @param string $szacowanaLacznaMasaPrzesylek
     */
    public function __construct($miejsceOdbioru, $nadawca, $oczekiwanaDataOdbioru, $oczekiwanaGodzinaOdbioru, $szacowanaIloscPrzeslek, $szacowanaLacznaMasaPrzesylek)
    {
      $this->miejsceOdbioru = $miejsceOdbioru;
      $this->nadawca = $nadawca;
      $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
      $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
      $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
      $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
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
     * @return zamowKuriera
     */
    public function setMiejsceOdbioru($miejsceOdbioru)
    {
      $this->miejsceOdbioru = $miejsceOdbioru;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getNadawca()
    {
      return $this->nadawca;
    }

    /**
     * @param adresType $nadawca
     * @return zamowKuriera
     */
    public function setNadawca($nadawca)
    {
      $this->nadawca = $nadawca;
      return $this;
    }

    /**
     * @return string
     */
    public function getOczekiwanaDataOdbioru()
    {
      return $this->oczekiwanaDataOdbioru;
    }

    /**
     * @param string $oczekiwanaDataOdbioru
     * @return zamowKuriera
     */
    public function setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
    {
      $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
      return $this;
    }

    /**
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru()
    {
      return $this->oczekiwanaGodzinaOdbioru;
    }

    /**
     * @param string $oczekiwanaGodzinaOdbioru
     * @return zamowKuriera
     */
    public function setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
    {
      $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzacowanaIloscPrzeslek()
    {
      return $this->szacowanaIloscPrzeslek;
    }

    /**
     * @param string $szacowanaIloscPrzeslek
     * @return zamowKuriera
     */
    public function setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
    {
      $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek()
    {
      return $this->szacowanaLacznaMasaPrzesylek;
    }

    /**
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return zamowKuriera
     */
    public function setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
    {
      $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
      return $this;
    }

}
