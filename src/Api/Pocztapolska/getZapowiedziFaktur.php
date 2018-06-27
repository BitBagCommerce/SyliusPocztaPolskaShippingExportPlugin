<?php

class getZapowiedziFaktur
{

    /**
     * @var date $data
     */
    protected $data = null;

    /**
     * @param date $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return date
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param date $data
     * @return getZapowiedziFaktur
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
