<?php
include_once __DIR__ . '/../products.php';

class Medicines extends Product
{
  protected int $confezioni;
  protected string $controindicazioni;

  function __construct($_confezioni, $_controindicazioni, $_prodName, $_prodDesc, $_price, $_whichAnimal)
  {
    $this->confezioni = $_confezioni;
    $this->controindicazioni = $_controindicazioni;

    $this->setProdName($_prodName);
    $this->setProdDesc($_prodDesc);
    $this->setPrice($_price);
    $this->setWhichAnimal($_whichAnimal);
  }
}
