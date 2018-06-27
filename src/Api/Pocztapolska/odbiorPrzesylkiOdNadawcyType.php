<?php

class odbiorPrzesylkiOdNadawcyType
{

    /**
     * @var boolean $wSobote
     */
    protected $wSobote = null;

    /**
     * @var boolean $wNiedzieleLubSwieto
     */
    protected $wNiedzieleLubSwieto = null;

    /**
     * @var boolean $wGodzinachOd20Do7
     */
    protected $wGodzinachOd20Do7 = null;

    /**
     * @param boolean $wSobote
     * @param boolean $wNiedzieleLubSwieto
     * @param boolean $wGodzinachOd20Do7
     */
    public function __construct($wSobote, $wNiedzieleLubSwieto, $wGodzinachOd20Do7)
    {
      $this->wSobote = $wSobote;
      $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;
      $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;
    }

    /**
     * @return boolean
     */
    public function getWSobote()
    {
      return $this->wSobote;
    }

    /**
     * @param boolean $wSobote
     * @return odbiorPrzesylkiOdNadawcyType
     */
    public function setWSobote($wSobote)
    {
      $this->wSobote = $wSobote;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWNiedzieleLubSwieto()
    {
      return $this->wNiedzieleLubSwieto;
    }

    /**
     * @param boolean $wNiedzieleLubSwieto
     * @return odbiorPrzesylkiOdNadawcyType
     */
    public function setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
    {
      $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWGodzinachOd20Do7()
    {
      return $this->wGodzinachOd20Do7;
    }

    /**
     * @param boolean $wGodzinachOd20Do7
     * @return odbiorPrzesylkiOdNadawcyType
     */
    public function setWGodzinachOd20Do7($wGodzinachOd20Do7)
    {
      $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;
      return $this;
    }

}
