<?php

class addRozbieznoscDoZapowiedziFaktur
{

    /**
     * @var base64Binary $rozbieznosciZipFile
     */
    protected $rozbieznosciZipFile = null;

    /**
     * @param base64Binary $rozbieznosciZipFile
     */
    public function __construct($rozbieznosciZipFile)
    {
      $this->rozbieznosciZipFile = $rozbieznosciZipFile;
    }

    /**
     * @return base64Binary
     */
    public function getRozbieznosciZipFile()
    {
      return $this->rozbieznosciZipFile;
    }

    /**
     * @param base64Binary $rozbieznosciZipFile
     * @return addRozbieznoscDoZapowiedziFaktur
     */
    public function setRozbieznosciZipFile($rozbieznosciZipFile)
    {
      $this->rozbieznosciZipFile = $rozbieznosciZipFile;
      return $this;
    }

}
