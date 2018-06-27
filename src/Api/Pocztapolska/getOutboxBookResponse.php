<?php

class getOutboxBookResponse
{

    /**
     * @var base64Binary $pdfContent
     */
    protected $pdfContent = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param base64Binary $pdfContent
     * @param errorType $error
     */
    public function __construct($pdfContent, $error)
    {
      $this->pdfContent = $pdfContent;
      $this->error = $error;
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
     * @return getOutboxBookResponse
     */
    public function setPdfContent($pdfContent)
    {
      $this->pdfContent = $pdfContent;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return getOutboxBookResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
