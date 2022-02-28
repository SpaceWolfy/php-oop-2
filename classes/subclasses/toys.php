<?php
include_once __DIR__ . '/../products.php';

class Toys extends Product
{
  protected string $grandezza;
  protected bool $squittio;

  function __construct($_grandezza, $_squittio, $_prodName, $_prodDesc, $_price, $_whichAnimal)
  {
    $this->grandezza = $_grandezza;
    $this->squittio = $_squittio;

    $this->setProdName($_prodName);
    $this->setProdDesc($_prodDesc);
    $this->setPrice($_price);
    $this->setWhichAnimal($_whichAnimal);
  }
}
