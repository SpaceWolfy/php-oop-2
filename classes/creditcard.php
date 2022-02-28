<?php
class CreditCard
{
  private int $number;
  private int $cvv;
  private string $cardHolder;
  private string $expirationDate;
  private bool $isValid;


  function __construct($_number, $_cvv, $_cardHolder, $_expirationDate)
  {
    $this->number = $_number;
    $this->cvv = $_cvv;
    $this->cardHolder = $_cardHolder;
    $this->expirationDate = $_expirationDate;
    $this->isValid = $this->setIsValid();
  }

  /* Validation of Card */
  public function getIsValid()
  {
    return $this->isValid;
  }

  public function setIsValid()
  {
    if ($this->expirationDate > date("Y/m/d")) {
      return $this->isValid = true;
    } else {
      var_dump($this->expirationDate);
      return $this->isValid = false;
    }
  }
}
