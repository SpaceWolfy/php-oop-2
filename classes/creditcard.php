<?php
class CreditCard
{
  private int $number;
  private int $cvv;
  private string $cardHolder;
  private $expirationDate;

  function __construct($_number, $_cvv, $_cardHolder, $_expirationDate)
  {
    $this->number = $_number;
    $this->cvv = $_cvv;
    $this->cardHolder = $_cardHolder;
    $this->expirationDate = $_expirationDate;
  }

  public function dataCheck()
  {
  }
}
