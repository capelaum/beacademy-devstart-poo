<?php

declare(strict_types=1);

final class Client extends User
{
  private string $registerDate;

  public function __construct(
    string $name,
    string $email,
    string $password,
    string $cpf,
    string $registerDate
  ) {
    parent::__construct($name, $email, $password, $cpf);

    $this->registerDate = $registerDate;
  }

  public function getRegisterDate(): string
  {
    return $this->registerDate;
  }

  public function setRegisterDate($registerDate): void
  {
    $this->registerDate = $registerDate;
  }
}
