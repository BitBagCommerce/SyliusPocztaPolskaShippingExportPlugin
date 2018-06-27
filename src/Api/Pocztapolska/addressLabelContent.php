<?php

class addressLabelContent
{

    /**
     * @var base64Binary $pdfContent
     */
    protected $pdfContent = null;

    /**
     * @var string $nrNadania
     */
    protected $nrNadania = null;

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @param base64Binary $pdfContent
     * @param string $nrNadania
     * @param string $guid
     */
    public function __construct($pdfContent, $nrNadania, $guid)
    {
      $this->pdfContent = $pdfContent;
      $this->nrNadania = $nrNadania;
      $this->guid = $guid;
    }

    /**
     * @return base64Binary
     */
    public function getPdfContent()
    {
      return $this->pdfContent;
    }

    /**
     * @param base64Binary $pdfContent
     * @return addressLabelContent
     */
    public function setPdfContent($pdfContent)
    {
      $this->pdfContent = $pdfContent;
      return $this;
    }

    /**
     * @return string
     */
    public function getNrNadania()
    {
      return $this->nrNadania;
    }

    /**
     * @param string $nrNadania
     * @return addressLabelContent
     */
    public function setNrNadania($nrNadania)
    {
      $this->nrNadania = $nrNadania;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return addressLabelContent
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
