<?php
include_once __DIR__ . '/../products.php';

class Food extends Product
{
  protected string $quantita;
  protected string $specifiche;

  function __construct($_quantita, $_specifiche, $_prodName, $_prodDesc, $_price, $_whichAnimal)
  {
    $this->quantita = $_quantita;
    $this->specifiche = $_specifiche;

    $this->setProdName($_prodName);
    $this->setProdDesc($_prodDesc);
    $this->setPrice($_price);
    $this->setWhichAnimal($_whichAnimal);
  }
}
