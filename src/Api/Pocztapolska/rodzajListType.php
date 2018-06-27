<?php

class rodzajListType
{

    /**
     * @var boolean $polecony
     */
    protected $polecony = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @param boolean $polecony
     * @param kategoriaType $kategoria
     */
    public function __construct($polecony, $kategoria)
    {
      $this->polecony = $polecony;
      $this->kategoria = $kategoria;
    }

    /**
     * @return boolean
     */
    public function getPolecony()
    {
      return $this->polecony;
    }

    /**
     * @param boolean $polecony
     * @return rodzajListType
     */
    public function setPolecony($polecony)
    {
      $this->polecony = $polecony;
      return $this;
    }

    /**
     * @return kategoriaType
     */
    public function getKategoria()
    {
      return $this->kategoria;
    }

    /**
     * @param kategoriaType $kategoria
     * @return rodzajListType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

}
