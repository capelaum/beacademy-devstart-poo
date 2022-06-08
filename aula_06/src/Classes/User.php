<?php

declare(strict_types=1);

namespace App\Classes;

class User
{
  public function __construct(
    private string $name,
    private string $email
  ) {
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName($name): void
  {
    $this->name = $name;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail($email): void
  {
    $this->email = $email;
  }
}
