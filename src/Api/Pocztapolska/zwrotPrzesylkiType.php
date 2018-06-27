<?php

class zwrotPrzesylkiType
{

    /**
     * @var przyczynaZwrotuEnum $przyczyna
     */
    protected $przyczyna = null;

    /**
     * @var \DateTime $data
     */
    protected $data = null;

    /**
     * @param przyczynaZwrotuEnum $przyczyna
     * @param \DateTime $data
     */
    public function __construct($przyczyna, \DateTime $data)
    {
      $this->przyczyna = $przyczyna;
      $this->data = $data->format(\DateTime::ATOM);
    }

    /**
     * @return przyczynaZwrotuEnum
     */
    public function getPrzyczyna()
    {
      return $this->przyczyna;
    }

    /**
     * @param przyczynaZwrotuEnum $przyczyna
     * @return zwrotPrzesylkiType
     */
    public function setPrzyczyna($przyczyna)
    {
      $this->przyczyna = $przyczyna;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getData()
    {
      if ($this->data == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->data);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $data
     * @return zwrotPrzesylkiType
     */
    public function setData(\DateTime $data)
    {
      $this->data = $data->format(\DateTime::ATOM);
      return $this;
    }

}
