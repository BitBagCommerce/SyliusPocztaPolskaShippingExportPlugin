<?php

class getKierunki
{

    /**
     * @var string $plan
     */
    protected $plan = null;

    /**
     * @var prefixKodPocztowy $prefixKodPocztowy
     */
    protected $prefixKodPocztowy = null;

    /**
     * @param string $plan
     * @param prefixKodPocztowy $prefixKodPocztowy
     */
    public function __construct($plan, $prefixKodPocztowy)
    {
      $this->plan = $plan;
      $this->prefixKodPocztowy = $prefixKodPocztowy;
    }

    /**
     * @return string
     */
    public function getPlan()
    {
      return $this->plan;
    }

    /**
     * @param string $plan
     * @return getKierunki
     */
    public function setPlan($plan)
    {
      $this->plan = $plan;
      return $this;
    }

    /**
     * @return prefixKodPocztowy
     */
    public function getPrefixKodPocztowy()
    {
      return $this->prefixKodPocztowy;
    }

    /**
     * @param prefixKodPocztowy $prefixKodPocztowy
     * @return getKierunki
     */
    public function setPrefixKodPocztowy($prefixKodPocztowy)
    {
      $this->prefixKodPocztowy = $prefixKodPocztowy;
      return $this;
    }

}
