<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
  public function render(string $view): void
  {
    include __DIR__ . "/../View/{$view}.php";
  }
}
