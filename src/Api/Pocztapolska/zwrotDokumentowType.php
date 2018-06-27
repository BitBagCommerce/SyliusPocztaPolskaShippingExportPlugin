<?php

class zwrotDokumentowType
{

    /**
     * @var terminRodzajType $rodzajPocztex
     */
    protected $rodzajPocztex = null;

    /**
     * @var rodzajListType $rodzajList
     */
    protected $rodzajList = null;

    /**
     * @var int $odleglosc
     */
    protected $odleglosc = null;

    /**
     * @param int $odleglosc
     */
    public function __construct($odleglosc)
    {
      $this->odleglosc = $odleglosc;
    }

    /**
     * @return terminRodzajType
     */
    public function getRodzajPocztex()
    {
      return $this->rodzajPocztex;
    }

    /**
     * @param terminRodzajType $rodzajPocztex
     * @return zwrotDokumentowType
     */
    public function setRodzajPocztex($rodzajPocztex)
    {
      $this->rodzajPocztex = $rodzajPocztex;
      return $this;
    }

    /**
     * @return rodzajListType
     */
    public function getRodzajList()
    {
      return $this->rodzajList;
    }

    /**
     * @param rodzajListType $rodzajList
     * @return zwrotDokumentowType
     */
    public function setRodzajList($rodzajList)
    {
      $this->rodzajList = $rodzajList;
      return $this;
    }

    /**
     * @return int
     */
    public function getOdleglosc()
    {
      return $this->odleglosc;
    }

    /**
     * @param int $odleglosc
     * @return zwrotDokumentowType
     */
    public function setOdleglosc($odleglosc)
    {
      $this->odleglosc = $odleglosc;
      return $this;
    }

}
