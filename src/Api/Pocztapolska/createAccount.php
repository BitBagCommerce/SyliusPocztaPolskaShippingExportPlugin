<?php

class createAccount
{

    /**
     * @var accountType $account
     */
    protected $account = null;

    /**
     * @param accountType $account
     */
    public function __construct($account)
    {
      $this->account = $account;
    }

    /**
     * @return accountType
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param accountType $account
     * @return createAccount
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
