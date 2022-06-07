<?php

declare(strict_types=1);

class Product
{
  private string $name;
  private float $price;

  /**
   * @param string $name
   * @return void
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param float $price
   * @return void
   */
  public function setPrice(float $price): void
  {
    $this->price = $price;
  }

  /**
   * @return float
   */
  public function getPrice(): float
  {
    return $this->price;
  }
}
