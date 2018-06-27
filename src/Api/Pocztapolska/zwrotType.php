<?php

class zwrotType
{

    /**
     * @var int $zwrotPoLiczbieDni
     */
    protected $zwrotPoLiczbieDni = null;

    /**
     * @var boolean $traktowacJakPorzucona
     */
    protected $traktowacJakPorzucona = null;

    /**
     * @var sposobZwrotuType $sposobZwrotu
     */
    protected $sposobZwrotu = null;

    /**
     * @param int $zwrotPoLiczbieDni
     * @param boolean $traktowacJakPorzucona
     * @param sposobZwrotuType $sposobZwrotu
     */
    public function __construct($zwrotPoLiczbieDni, $traktowacJakPorzucona, $sposobZwrotu)
    {
      $this->zwrotPoLiczbieDni = $zwrotPoLiczbieDni;
      $this->traktowacJakPorzucona = $traktowacJakPorzucona;
      $this->sposobZwrotu = $sposobZwrotu;
    }

    /**
     * @return int
     */
    public function getZwrotPoLiczbieDni()
    {
      return $this->zwrotPoLiczbieDni;
    }

    /**
     * @param int $zwrotPoLiczbieDni
     * @return zwrotType
     */
    public function setZwrotPoLiczbieDni($zwrotPoLiczbieDni)
    {
      $this->zwrotPoLiczbieDni = $zwrotPoLiczbieDni;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTraktowacJakPorzucona()
    {
      return $this->traktowacJakPorzucona;
    }

    /**
     * @param boolean $traktowacJakPorzucona
     * @return zwrotType
     */
    public function setTraktowacJakPorzucona($traktowacJakPorzucona)
    {
      $this->traktowacJakPorzucona = $traktowacJakPorzucona;
      return $this;
    }

    /**
     * @return sposobZwrotuType
     */
    public function getSposobZwrotu()
    {
      return $this->sposobZwrotu;
    }

    /**
     * @param sposobZwrotuType $sposobZwrotu
     * @return zwrotType
     */
    public function setSposobZwrotu($sposobZwrotu)
    {
      $this->sposobZwrotu = $sposobZwrotu;
      return $this;
    }

}
