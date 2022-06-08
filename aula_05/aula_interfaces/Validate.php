<?php

interface Validate
{
  public function validateName(string $name): void;

  public function validateDocument(string $document): void;

  public function validatePostalCode(string $postalCode): void;
}
