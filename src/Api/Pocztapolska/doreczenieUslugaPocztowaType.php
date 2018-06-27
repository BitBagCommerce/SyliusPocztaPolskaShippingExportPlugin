<?php

class doreczenieUslugaPocztowaType
{

    /**
     * @var date $oczekiwanyTerminDoreczenia
     */
    protected $oczekiwanyTerminDoreczenia = null;

    /**
     * @var oczekiwanaGodzinaDoreczeniaUslugiType $oczekiwanaGodzinaDoreczenia
     */
    protected $oczekiwanaGodzinaDoreczenia = null;

    /**
     * @var boolean $wSobote
     */
    protected $wSobote = null;

    /**
     * @var boolean $doRakWlasnych
     */
    protected $doRakWlasnych = null;

    /**
     * @param date $oczekiwanyTerminDoreczenia
     * @param oczekiwanaGodzinaDoreczeniaUslugiType $oczekiwanaGodzinaDoreczenia
     * @param boolean $wSobote
     * @param boolean $doRakWlasnych
     */
    public function __construct($oczekiwanyTerminDoreczenia, $oczekiwanaGodzinaDoreczenia, $wSobote, $doRakWlasnych)
    {
      $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
      $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;
      $this->wSobote = $wSobote;
      $this->doRakWlasnych = $doRakWlasnych;
    }

    /**
     * @return date
     */
    public function getOczekiwanyTerminDoreczenia()
    {
      return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * @param date $oczekiwanyTerminDoreczenia
     * @return doreczenieUslugaPocztowaType
     */
    public function setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
    {
      $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
      return $this;
    }

    /**
     * @return oczekiwanaGodzinaDoreczeniaUslugiType
     */
    public function getOczekiwanaGodzinaDoreczenia()
    {
      return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * @param oczekiwanaGodzinaDoreczeniaUslugiType $oczekiwanaGodzinaDoreczenia
     * @return doreczenieUslugaPocztowaType
     */
    public function setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
    {
      $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWSobote()
    {
      return $this->wSobote;
    }

    /**
     * @param boolean $wSobote
     * @return doreczenieUslugaPocztowaType
     */
    public function setWSobote($wSobote)
    {
      $this->wSobote = $wSobote;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoRakWlasnych()
    {
      return $this->doRakWlasnych;
    }

    /**
     * @param boolean $doRakWlasnych
     * @return doreczenieUslugaPocztowaType
     */
    public function setDoRakWlasnych($doRakWlasnych)
    {
      $this->doRakWlasnych = $doRakWlasnych;
      return $this;
    }

}
