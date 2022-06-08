<?php

declare(strict_types=1);

class ValidateBR implements Validate
{
  public function validateName(string $name): void
  {
    if (strlen($name) < 3) {
      throw new Exception('Nome inválido');
    }
  }

  public function validateDocument(string $document): void
  {
    $document = preg_replace('/[^0-9]/', '', (string) $document);

    if (strlen($document) !== 11) {
      throw new Exception('CPF inválido');
    }
  }

  public function validatePostalCode(string $postalCode): void
  {
    if (strlen($postalCode) < 8) {
      throw new Exception('CEP inválido');
    }
  }
}
