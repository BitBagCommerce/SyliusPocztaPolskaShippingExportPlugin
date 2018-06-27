<?php

class pobranieType
{

    /**
     * @var sposobPobraniaType $sposobPobrania
     */
    protected $sposobPobrania = null;

    /**
     * @var kwotaPobraniaType $kwotaPobrania
     */
    protected $kwotaPobrania = null;

    /**
     * @var anonymous55 $nrb
     */
    protected $nrb = null;

    /**
     * @var anonymous56 $tytulem
     */
    protected $tytulem = null;

    /**
     * @var boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @param sposobPobraniaType $sposobPobrania
     * @param kwotaPobraniaType $kwotaPobrania
     * @param anonymous55 $nrb
     * @param anonymous56 $tytulem
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    public function __construct($sposobPobrania, $kwotaPobrania, $nrb, $tytulem, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sposobPobrania = $sposobPobrania;
      $this->kwotaPobrania = $kwotaPobrania;
      $this->nrb = $nrb;
      $this->tytulem = $tytulem;
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @return sposobPobraniaType
     */
    public function getSposobPobrania()
    {
      return $this->sposobPobrania;
    }

    /**
     * @param sposobPobraniaType $sposobPobrania
     * @return pobranieType
     */
    public function setSposobPobrania($sposobPobrania)
    {
      $this->sposobPobrania = $sposobPobrania;
      return $this;
    }

    /**
     * @return kwotaPobraniaType
     */
    public function getKwotaPobrania()
    {
      return $this->kwotaPobrania;
    }

    /**
     * @param kwotaPobraniaType $kwotaPobrania
     * @return pobranieType
     */
    public function setKwotaPobrania($kwotaPobrania)
    {
      $this->kwotaPobrania = $kwotaPobrania;
      return $this;
    }

    /**
     * @return anonymous55
     */
    public function getNrb()
    {
      return $this->nrb;
    }

    /**
     * @param anonymous55 $nrb
     * @return pobranieType
     */
    public function setNrb($nrb)
    {
      $this->nrb = $nrb;
      return $this;
    }

    /**
     * @return anonymous56
     */
    public function getTytulem()
    {
      return $this->tytulem;
    }

    /**
     * @param anonymous56 $tytulem
     * @return pobranieType
     */
    public function setTytulem($tytulem)
    {
      $this->tytulem = $tytulem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
      return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return pobranieType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      return $this;
    }

}
