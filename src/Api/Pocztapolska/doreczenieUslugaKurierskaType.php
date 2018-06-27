<?php

class doreczenieUslugaKurierskaType
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
     * @var boolean $w90Minut
     */
    protected $w90Minut = null;

    /**
     * @var boolean $wNiedzieleLubSwieto
     */
    protected $wNiedzieleLubSwieto = null;

    /**
     * @var boolean $doRakWlasnych
     */
    protected $doRakWlasnych = null;

    /**
     * @var boolean $wGodzinachOd20Do7
     */
    protected $wGodzinachOd20Do7 = null;

    /**
     * @var boolean $po17
     */
    protected $po17 = null;

    /**
     * @param date $oczekiwanyTerminDoreczenia
     * @param oczekiwanaGodzinaDoreczeniaUslugiType $oczekiwanaGodzinaDoreczenia
     * @param boolean $wSobote
     * @param boolean $w90Minut
     * @param boolean $wNiedzieleLubSwieto
     * @param boolean $doRakWlasnych
     * @param boolean $wGodzinachOd20Do7
     * @param boolean $po17
     */
    public function __construct($oczekiwanyTerminDoreczenia, $oczekiwanaGodzinaDoreczenia, $wSobote, $w90Minut, $wNiedzieleLubSwieto, $doRakWlasnych, $wGodzinachOd20Do7, $po17)
    {
      $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
      $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;
      $this->wSobote = $wSobote;
      $this->w90Minut = $w90Minut;
      $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;
      $this->doRakWlasnych = $doRakWlasnych;
      $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;
      $this->po17 = $po17;
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
     * @return doreczenieUslugaKurierskaType
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
     * @return doreczenieUslugaKurierskaType
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
     * @return doreczenieUslugaKurierskaType
     */
    public function setWSobote($wSobote)
    {
      $this->wSobote = $wSobote;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getW90Minut()
    {
      return $this->w90Minut;
    }

    /**
     * @param boolean $w90Minut
     * @return doreczenieUslugaKurierskaType
     */
    public function setW90Minut($w90Minut)
    {
      $this->w90Minut = $w90Minut;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWNiedzieleLubSwieto()
    {
      return $this->wNiedzieleLubSwieto;
    }

    /**
     * @param boolean $wNiedzieleLubSwieto
     * @return doreczenieUslugaKurierskaType
     */
    public function setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
    {
      $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;
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
     * @return doreczenieUslugaKurierskaType
     */
    public function setDoRakWlasnych($doRakWlasnych)
    {
      $this->doRakWlasnych = $doRakWlasnych;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWGodzinachOd20Do7()
    {
      return $this->wGodzinachOd20Do7;
    }

    /**
     * @param boolean $wGodzinachOd20Do7
     * @return doreczenieUslugaKurierskaType
     */
    public function setWGodzinachOd20Do7($wGodzinachOd20Do7)
    {
      $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPo17()
    {
      return $this->po17;
    }

    /**
     * @param boolean $po17
     * @return doreczenieUslugaKurierskaType
     */
    public function setPo17($po17)
    {
      $this->po17 = $po17;
      return $this;
    }

}
