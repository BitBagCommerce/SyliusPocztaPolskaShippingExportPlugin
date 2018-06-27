<?php

class getZapowiedziFakturResponse
{

    /**
     * @var base64Binary $zapowiedzFakturyZipFile
     */
    protected $zapowiedzFakturyZipFile = null;

    /**
     * @param base64Binary $zapowiedzFakturyZipFile
     */
    public function __construct($zapowiedzFakturyZipFile)
    {
      $this->zapowiedzFakturyZipFile = $zapowiedzFakturyZipFile;
    }

    /**
     * @return base64Binary
     */
    public function getZapowiedzFakturyZipFile()
    {
      return $this->zapowiedzFakturyZipFile;
    }

    /**
     * @param base64Binary $zapowiedzFakturyZipFile
     * @return getZapowiedziFakturResponse
     */
    public function setZapowiedzFakturyZipFile($zapowiedzFakturyZipFile)
    {
      $this->zapowiedzFakturyZipFile = $zapowiedzFakturyZipFile;
      return $this;
    }

}
