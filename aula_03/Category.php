<?php

declare(strict_types=1);

class Category
{
  public function __construct(
    private string $name,
    private string $description
  ) {
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }
}
