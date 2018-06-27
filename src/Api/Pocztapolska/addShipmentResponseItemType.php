<?php

class addShipmentResponseItemType
{

    /**
     * @var errorType[] $error
     */
    protected $error = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru = null;

    /**
     * @param numerNadaniaType $numerNadania
     * @param guidType $guid
     * @param string $numerTransakcjiOdbioru
     */
    public function __construct($numerNadania, $guid, $numerTransakcjiOdbioru)
    {
      $this->numerNadania = $numerNadania;
      $this->guid = $guid;
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
    }

    /**
     * @return errorType[]
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType[] $error
     * @return addShipmentResponseItemType
     */
    public function setError(array $error = null)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadania()
    {
      return $this->numerNadania;
    }

    /**
     * @param numerNadaniaType $numerNadania
     * @return addShipmentResponseItemType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return addShipmentResponseItemType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
      return $this->numerTransakcjiOdbioru;
    }

    /**
     * @param string $numerTransakcjiOdbioru
     * @return addShipmentResponseItemType
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
      return $this;
    }

}
