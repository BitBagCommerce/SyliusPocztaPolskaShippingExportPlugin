<?php

class potwierdzenieDoreczeniaType
{

    /**
     * @var sposobDoreczeniaPotwierdzeniaType $sposob
     */
    protected $sposob = null;

    /**
     * @var string $kontakt
     */
    protected $kontakt = null;

    /**
     * @param sposobDoreczeniaPotwierdzeniaType $sposob
     * @param string $kontakt
     */
    public function __construct($sposob, $kontakt)
    {
      $this->sposob = $sposob;
      $this->kontakt = $kontakt;
    }

    /**
     * @return sposobDoreczeniaPotwierdzeniaType
     */
    public function getSposob()
    {
      return $this->sposob;
    }

    /**
     * @param sposobDoreczeniaPotwierdzeniaType $sposob
     * @return potwierdzenieDoreczeniaType
     */
    public function setSposob($sposob)
    {
      $this->sposob = $sposob;
      return $this;
    }

    /**
     * @return string
     */
    public function getKontakt()
    {
      return $this->kontakt;
    }

    /**
     * @param string $kontakt
     * @return potwierdzenieDoreczeniaType
     */
    public function setKontakt($kontakt)
    {
      $this->kontakt = $kontakt;
      return $this;
    }

}
