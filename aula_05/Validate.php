<?php

declare(strict_types=1);

class Validate
{
  public static function cpf(string $cpf): bool
  {
    $cpf = preg_replace('/[^0-9]/', '', (string) $cpf);

    if (strlen($cpf) != 11) {
      return false;
    }

    return true;
  }
}
