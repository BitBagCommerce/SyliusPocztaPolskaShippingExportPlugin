<?php

class updateEnvelopeBufor
{

    /**
     * @var buforType $bufor
     */
    protected $bufor = null;

    /**
     * @param buforType $bufor
     */
    public function __construct($bufor)
    {
      $this->bufor = $bufor;
    }

    /**
     * @return buforType
     */
    public function getBufor()
    {
      return $this->bufor;
    }

    /**
     * @param buforType $bufor
     * @return updateEnvelopeBufor
     */
    public function setBufor($bufor)
    {
      $this->bufor = $bufor;
      return $this;
    }

}
