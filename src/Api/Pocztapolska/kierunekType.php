<?php

class kierunekType
{

    /**
     * @var kodPocztowyType[] $kodPocztowy
     */
    protected $kodPocztowy = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var kodPocztowyType $pna
     */
    protected $pna = null;

    /**
     * @param int $id
     * @param string $opis
     * @param kodPocztowyType $pna
     */
    public function __construct($id, $opis, $pna)
    {
      $this->id = $id;
      $this->opis = $opis;
      $this->pna = $pna;
    }

    /**
     * @return kodPocztowyType[]
     */
    public function getKodPocztowy()
    {
      return $this->kodPocztowy;
    }

    /**
     * @param kodPocztowyType[] $kodPocztowy
     * @return kierunekType
     */
    public function setKodPocztowy(array $kodPocztowy = null)
    {
      $this->kodPocztowy = $kodPocztowy;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return kierunekType
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
     * @return kierunekType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

    /**
     * @return kodPocztowyType
     */
    public function getPna()
    {
      return $this->pna;
    }

    /**
     * @param kodPocztowyType $pna
     * @return kierunekType
     */
    public function setPna($pna)
    {
      $this->pna = $pna;
      return $this;
    }

}
