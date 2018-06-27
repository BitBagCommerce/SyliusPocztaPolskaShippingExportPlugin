<?php

class przesylkaFullType
{

    /**
     * @var przesylkaShortType $przesylkaShort
     */
    protected $przesylkaShort = null;

    /**
     * @var przesylkaType $przesylkaFull
     */
    protected $przesylkaFull = null;

    /**
     * @param przesylkaShortType $przesylkaShort
     * @param przesylkaType $przesylkaFull
     */
    public function __construct($przesylkaShort, $przesylkaFull)
    {
      $this->przesylkaShort = $przesylkaShort;
      $this->przesylkaFull = $przesylkaFull;
    }

    /**
     * @return przesylkaShortType
     */
    public function getPrzesylkaShort()
    {
      return $this->przesylkaShort;
    }

    /**
     * @param przesylkaShortType $przesylkaShort
     * @return przesylkaFullType
     */
    public function setPrzesylkaShort($przesylkaShort)
    {
      $this->przesylkaShort = $przesylkaShort;
      return $this;
    }

    /**
     * @return przesylkaType
     */
    public function getPrzesylkaFull()
    {
      return $this->przesylkaFull;
    }

    /**
     * @param przesylkaType $przesylkaFull
     * @return przesylkaFullType
     */
    public function setPrzesylkaFull($przesylkaFull)
    {
      $this->przesylkaFull = $przesylkaFull;
      return $this;
    }

}
