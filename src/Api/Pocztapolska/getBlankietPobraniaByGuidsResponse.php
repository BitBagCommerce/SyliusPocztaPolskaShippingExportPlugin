<?php

class getBlankietPobraniaByGuidsResponse
{

    /**
     * @var addressLabelContent $content
     */
    protected $content = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param addressLabelContent $content
     * @param errorType $error
     */
    public function __construct($content, $error)
    {
      $this->content = $content;
      $this->error = $error;
    }

    /**
     * @return addressLabelContent
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param addressLabelContent $content
     * @return getBlankietPobraniaByGuidsResponse
     */
    public function setContent($content)
    {
      $this->content = $content;
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
     * @return getBlankietPobraniaByGuidsResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
