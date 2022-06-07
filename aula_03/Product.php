<?php

declare(strict_types=1);

class Product
{
  private string $name;
  private string $description;
  private float $price;
  private readonly Category $category; // PHP 8.1

  public function __construct(string $name, float $price, Category $category)
  {
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setPrice(float $price): void
  {
    $this->price = $price;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  public function getDescription(): string
  {
    return ($this->description) ?? "";
  }

  public function getCategory(): Category
  {
    return $this->category;
  }
}
