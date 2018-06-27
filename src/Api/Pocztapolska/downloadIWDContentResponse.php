<?php

class downloadIWDContentResponse
{

    /**
     * @var base64Binary $IWDContent
     */
    protected $IWDContent = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param base64Binary $IWDContent
     * @param errorType $error
     */
    public function __construct($IWDContent, $error)
    {
      $this->IWDContent = $IWDContent;
      $this->error = $error;
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
     * @return downloadIWDContentResponse
     */
    public function setIWDContent($IWDContent)
    {
      $this->IWDContent = $IWDContent;
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
     * @return downloadIWDContentResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
