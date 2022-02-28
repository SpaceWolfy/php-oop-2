<?php

class Product
{
  protected string $prodName;
  protected string $prodDesc;
  protected int $price;
  protected string $whichAnimal;

  /* Product Name */
  public function getProdName()
  {
    return $this->prodName;
  }

  public function setProdName($prodName)
  {
    $this->prodName = $prodName;

    return $this;
  }
  /* ------------ */

  /* Product Description */
  public function getProdDesc()
  {
    return $this->prodDesc;
  }

  public function setProdDesc($prodDesc)
  {
    $this->prodDesc = $prodDesc;

    return $this;
  }
  /* ------------------- */

  /* Price */
  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }
  /* ----- */

  /* Animal Type */
  public function getWhichAnimal()
  {
    return $this->whichAnimal;
  }

  public function setWhichAnimal($whichAnimal)
  {
    $this->whichAnimal = $whichAnimal;

    return $this;
  }
  /* ----------- */
}
