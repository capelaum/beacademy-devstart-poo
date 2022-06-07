<?php

declare(strict_types=1);

abstract class User
{
  public function __construct(
    private string $name,
    private string $email,
    private string $password,
    private string $cpf
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

  public function getPassword(): string
  {
    return $this->password;
  }

  public function setPassword($password): void
  {
    $this->password = $password;
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }

  public function setCpf($cpf): void
  {
    $this->cpf = $cpf;
  }
}
