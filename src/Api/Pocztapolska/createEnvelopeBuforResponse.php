<?php

class createEnvelopeBuforResponse
{

    /**
     * @var buforType $createdBufor
     */
    protected $createdBufor = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param buforType $createdBufor
     * @param errorType $error
     */
    public function __construct($createdBufor, $error)
    {
      $this->createdBufor = $createdBufor;
      $this->error = $error;
    }

    /**
     * @return buforType
     */
    public function getCreatedBufor()
    {
      return $this->createdBufor;
    }

    /**
     * @param buforType $createdBufor
     * @return createEnvelopeBuforResponse
     */
    public function setCreatedBufor($createdBufor)
    {
      $this->createdBufor = $createdBufor;
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
     * @return createEnvelopeBuforResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
