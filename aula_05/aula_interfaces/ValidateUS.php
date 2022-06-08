<?php

declare(strict_types=1);

class ValidateUS implements Validate
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

    if (strlen($document) !== 14) {
      throw new Exception('Documento USA inválido');
    }
  }

  public function validatePostalCode(string $postalCode): void
  {
    $postalCode = preg_replace('/[^0-9]/', '', (string) $postalCode);

    if (strlen($postalCode) !== 8) {
      throw new Exception('Código postal USA inválido');
    }
  }
}
