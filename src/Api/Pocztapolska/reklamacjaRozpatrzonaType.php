<?php

class reklamacjaRozpatrzonaType
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var rozstrzygniecieType $rozstrzygniecie
     */
    protected $rozstrzygniecie = null;

    /**
     * @var int $przyznaneOdszkodowanie
     */
    protected $przyznaneOdszkodowanie = null;

    /**
     * @var string $uzasadnienie
     */
    protected $uzasadnienie = null;

    /**
     * @var date $dataRozpatrzenia
     */
    protected $dataRozpatrzenia = null;

    /**
     * @var string $nazwaJednostkiRozpatrujacej
     */
    protected $nazwaJednostkiRozpatrujacej = null;

    /**
     * @var string $osobaRozpatrujaca
     */
    protected $osobaRozpatrujaca = null;

    /**
     * @var string $idReklamacja
     */
    protected $idReklamacja = null;

    /**
     * @param guidType $guid
     * @param numerNadaniaType $numerNadania
     * @param rozstrzygniecieType $rozstrzygniecie
     * @param int $przyznaneOdszkodowanie
     * @param string $uzasadnienie
     * @param date $dataRozpatrzenia
     * @param string $nazwaJednostkiRozpatrujacej
     * @param string $osobaRozpatrujaca
     * @param string $idReklamacja
     */
    public function __construct($guid, $numerNadania, $rozstrzygniecie, $przyznaneOdszkodowanie, $uzasadnienie, $dataRozpatrzenia, $nazwaJednostkiRozpatrujacej, $osobaRozpatrujaca, $idReklamacja)
    {
      $this->guid = $guid;
      $this->numerNadania = $numerNadania;
      $this->rozstrzygniecie = $rozstrzygniecie;
      $this->przyznaneOdszkodowanie = $przyznaneOdszkodowanie;
      $this->uzasadnienie = $uzasadnienie;
      $this->dataRozpatrzenia = $dataRozpatrzenia;
      $this->nazwaJednostkiRozpatrujacej = $nazwaJednostkiRozpatrujacej;
      $this->osobaRozpatrujaca = $osobaRozpatrujaca;
      $this->idReklamacja = $idReklamacja;
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
     * @return reklamacjaRozpatrzonaType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
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
     * @return reklamacjaRozpatrzonaType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return rozstrzygniecieType
     */
    public function getRozstrzygniecie()
    {
      return $this->rozstrzygniecie;
    }

    /**
     * @param rozstrzygniecieType $rozstrzygniecie
     * @return reklamacjaRozpatrzonaType
     */
    public function setRozstrzygniecie($rozstrzygniecie)
    {
      $this->rozstrzygniecie = $rozstrzygniecie;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrzyznaneOdszkodowanie()
    {
      return $this->przyznaneOdszkodowanie;
    }

    /**
     * @param int $przyznaneOdszkodowanie
     * @return reklamacjaRozpatrzonaType
     */
    public function setPrzyznaneOdszkodowanie($przyznaneOdszkodowanie)
    {
      $this->przyznaneOdszkodowanie = $przyznaneOdszkodowanie;
      return $this;
    }

    /**
     * @return string
     */
    public function getUzasadnienie()
    {
      return $this->uzasadnienie;
    }

    /**
     * @param string $uzasadnienie
     * @return reklamacjaRozpatrzonaType
     */
    public function setUzasadnienie($uzasadnienie)
    {
      $this->uzasadnienie = $uzasadnienie;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataRozpatrzenia()
    {
      return $this->dataRozpatrzenia;
    }

    /**
     * @param date $dataRozpatrzenia
     * @return reklamacjaRozpatrzonaType
     */
    public function setDataRozpatrzenia($dataRozpatrzenia)
    {
      $this->dataRozpatrzenia = $dataRozpatrzenia;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwaJednostkiRozpatrujacej()
    {
      return $this->nazwaJednostkiRozpatrujacej;
    }

    /**
     * @param string $nazwaJednostkiRozpatrujacej
     * @return reklamacjaRozpatrzonaType
     */
    public function setNazwaJednostkiRozpatrujacej($nazwaJednostkiRozpatrujacej)
    {
      $this->nazwaJednostkiRozpatrujacej = $nazwaJednostkiRozpatrujacej;
      return $this;
    }

    /**
     * @return string
     */
    public function getOsobaRozpatrujaca()
    {
      return $this->osobaRozpatrujaca;
    }

    /**
     * @param string $osobaRozpatrujaca
     * @return reklamacjaRozpatrzonaType
     */
    public function setOsobaRozpatrujaca($osobaRozpatrujaca)
    {
      $this->osobaRozpatrujaca = $osobaRozpatrujaca;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdReklamacja()
    {
      return $this->idReklamacja;
    }

    /**
     * @param string $idReklamacja
     * @return reklamacjaRozpatrzonaType
     */
    public function setIdReklamacja($idReklamacja)
    {
      $this->idReklamacja = $idReklamacja;
      return $this;
    }

}
