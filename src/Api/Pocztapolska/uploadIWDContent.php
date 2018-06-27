<?php

class uploadIWDContent
{

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var base64Binary $IWDContent
     */
    protected $IWDContent = null;

    /**
     * @param urzadNadaniaType $urzadNadania
     * @param base64Binary $IWDContent
     */
    public function __construct($urzadNadania, $IWDContent)
    {
      $this->urzadNadania = $urzadNadania;
      $this->IWDContent = $IWDContent;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getUrzadNadania()
    {
      return $this->urzadNadania;
    }

    /**
     * @param urzadNadaniaType $urzadNadania
     * @return uploadIWDContent
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getIWDContent()
    {
      return $this->IWDContent;
    }

    /**
     * @param base64Binary $IWDContent
     * @return uploadIWDContent
     */
    public function setIWDContent($IWDContent)
    {
      $this->IWDContent = $IWDContent;
      return $this;
    }

}
