<?php

class getJednostkaOrganizacyjna
{

    /**
     * @var jednostkaOrganizacyjnaType $jednostka
     */
    protected $jednostka = null;

    /**
     * @param jednostkaOrganizacyjnaType $jednostka
     */
    public function __construct($jednostka)
    {
      $this->jednostka = $jednostka;
    }

    /**
     * @return jednostkaOrganizacyjnaType
     */
    public function getJednostka()
    {
      return $this->jednostka;
    }

    /**
     * @param jednostkaOrganizacyjnaType $jednostka
     * @return getJednostkaOrganizacyjna
     */
    public function setJednostka($jednostka)
    {
      $this->jednostka = $jednostka;
      return $this;
    }

}
