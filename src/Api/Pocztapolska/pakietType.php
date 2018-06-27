<?php

class pakietType
{

    /**
     * @var kierunekType $kierunek
     */
    protected $kierunek = null;

    /**
     * @var opakowanieType[] $opakowanie
     */
    protected $opakowanie = null;

    /**
     * @var czynnoscUpustowaType[] $czynnoscUpustowa
     */
    protected $czynnoscUpustowa = null;

    /**
     * @var guidType $pakietGuid
     */
    protected $pakietGuid = null;

    /**
     * @var miejsceOdbioruType $miejsceOdbioru
     */
    protected $miejsceOdbioru = null;

    /**
     * @var sposobNadaniaType $sposobNadania
     */
    protected $sposobNadania = null;

    /**
     * @param guidType $pakietGuid
     * @param miejsceOdbioruType $miejsceOdbioru
     * @param sposobNadaniaType $sposobNadania
     */
    public function __construct($pakietGuid, $miejsceOdbioru, $sposobNadania)
    {
      $this->pakietGuid = $pakietGuid;
      $this->miejsceOdbioru = $miejsceOdbioru;
      $this->sposobNadania = $sposobNadania;
    }

    /**
     * @return kierunekType
     */
    public function getKierunek()
    {
      return $this->kierunek;
    }

    /**
     * @param kierunekType $kierunek
     * @return pakietType
     */
    public function setKierunek($kierunek)
    {
      $this->kierunek = $kierunek;
      return $this;
    }

    /**
     * @return opakowanieType[]
     */
    public function getOpakowanie()
    {
      return $this->opakowanie;
    }

    /**
     * @param opakowanieType[] $opakowanie
     * @return pakietType
     */
    public function setOpakowanie(array $opakowanie = null)
    {
      $this->opakowanie = $opakowanie;
      return $this;
    }

    /**
     * @return czynnoscUpustowaType[]
     */
    public function getCzynnoscUpustowa()
    {
      return $this->czynnoscUpustowa;
    }

    /**
     * @param czynnoscUpustowaType[] $czynnoscUpustowa
     * @return pakietType
     */
    public function setCzynnoscUpustowa(array $czynnoscUpustowa = null)
    {
      $this->czynnoscUpustowa = $czynnoscUpustowa;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getPakietGuid()
    {
      return $this->pakietGuid;
    }

    /**
     * @param guidType $pakietGuid
     * @return pakietType
     */
    public function setPakietGuid($pakietGuid)
    {
      $this->pakietGuid = $pakietGuid;
      return $this;
    }

    /**
     * @return miejsceOdbioruType
     */
    public function getMiejsceOdbioru()
    {
      return $this->miejsceOdbioru;
    }

    /**
     * @param miejsceOdbioruType $miejsceOdbioru
     * @return pakietType
     */
    public function setMiejsceOdbioru($miejsceOdbioru)
    {
      $this->miejsceOdbioru = $miejsceOdbioru;
      return $this;
    }

    /**
     * @return sposobNadaniaType
     */
    public function getSposobNadania()
    {
      return $this->sposobNadania;
    }

    /**
     * @param sposobNadaniaType $sposobNadania
     * @return pakietType
     */
    public function setSposobNadania($sposobNadania)
    {
      $this->sposobNadania = $sposobNadania;
      return $this;
    }

}
