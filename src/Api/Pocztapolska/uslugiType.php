<?php

class uslugiType
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @param string $id
     * @param string $opis
     */
    public function __construct($id, $opis)
    {
      $this->id = $id;
      $this->opis = $opis;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return uslugiType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param string $opis
     * @return uslugiType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

}
