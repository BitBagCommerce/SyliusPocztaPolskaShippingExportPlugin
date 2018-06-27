<?php

class zwrotDokumentowKurierskaType
{

    /**
     * @var terminZwrotDokumentowKurierskaType $rodzajPocztex
     */
    protected $rodzajPocztex = null;

    /**
     * @var terminZwrotDokumentowPaczkowaType $rodzajPaczka
     */
    protected $rodzajPaczka = null;

    /**
     * @var rodzajListType $rodzajList
     */
    protected $rodzajList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return terminZwrotDokumentowKurierskaType
     */
    public function getRodzajPocztex()
    {
      return $this->rodzajPocztex;
    }

    /**
     * @param terminZwrotDokumentowKurierskaType $rodzajPocztex
     * @return zwrotDokumentowKurierskaType
     */
    public function setRodzajPocztex($rodzajPocztex)
    {
      $this->rodzajPocztex = $rodzajPocztex;
      return $this;
    }

    /**
     * @return terminZwrotDokumentowPaczkowaType
     */
    public function getRodzajPaczka()
    {
      return $this->rodzajPaczka;
    }

    /**
     * @param terminZwrotDokumentowPaczkowaType $rodzajPaczka
     * @return zwrotDokumentowKurierskaType
     */
    public function setRodzajPaczka($rodzajPaczka)
    {
      $this->rodzajPaczka = $rodzajPaczka;
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
     * @return zwrotDokumentowKurierskaType
     */
    public function setRodzajList($rodzajList)
    {
      $this->rodzajList = $rodzajList;
      return $this;
    }

}
