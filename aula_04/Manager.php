<?php

declare(strict_types=1);

class Manager extends User
{
  private float $wage;
  private string $shift;

  public function __construct(
    string $name,
    string $email,
    string $password,
    string $cpf,
    float $wage,
    string $shift
  ) {
    parent::__construct($name, $email, $password, $cpf);

    $this->wage = $wage;
    $this->shift = $shift;
  }

  /**
   * Get the value of wage
   */
  public function getWage()
  {
    return $this->wage;
  }

  /**
   * Set the value of wage
   *
   * @return  self
   */
  public function setWage($wage)
  {
    $this->wage = $wage;

    return $this;
  }

  /**
   * Get the value of shift
   */
  public function getShift()
  {
    return $this->shift;
  }

  /**
   * Set the value of shift
   *
   * @return  self
   */
  public function setShift($shift)
  {
    $this->shift = $shift;

    return $this;
  }
}
