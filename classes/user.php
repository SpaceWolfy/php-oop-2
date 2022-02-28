<?php

require_once './creditcard.php';

class Buyer
{
  protected string $name;
  protected string $surname;
  protected string $email;
  protected string $shippingAddress;
  protected $creditCard;
  protected $cart = [];
  protected int $cartPrice;
  protected int $cartPriceDiscount;
  protected int $totalPrice;
  protected int $discountValue = 20;
  protected bool $isRegistered = false;

  function __construct()
  {
    $this->creditCard = $this->addCreditCard();
    $this->cartPrice = $this->isRegisteredDiscount();
    /* $this->isRegistered = true; */
    /* $this->cartPrice = $this->isRegisteredDiscount(10); */
  }

  /* Name */
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }
  /* ---- */

  /* Surname */
  public function getSurname()
  {
    return $this->surname;
  }

  public function setSurname($surname)
  {
    $this->surname = $surname;

    return $this;
  }
  /* ------- */

  /* Email */
  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }
  /* ----- */

  /* Address */
  public function getShippingAddress()
  {
    return $this->shippingAddress;
  }

  public function setShippingAddress($shippingAddress)
  {
    $this->shippingAddress = $shippingAddress;

    return $this;
  }
  /* ------- */

  /* CreditCard */
  function addCreditCard()
  {
    return new CreditCard(4382356189895476, 899, 'Gino Pino', date("Y-m-d", strtotime("2022/10/4")));
  }
  /* ---------- */

  /* Sconto */
  public function isRegisteredDiscount($price = 0)
  {
    if ($this->isRegistered === true) {
      $priceDiscount = ($this->discountValue / 100) * $price;
      $totalPrice = $price - $priceDiscount;
      return $totalPrice;
    } else {
      return $price;
    }
  }
  /* ------ */
}

$user = new Buyer();
var_dump($user);
