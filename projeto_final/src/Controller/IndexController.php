<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController
{
  public function indexAction(): void
  {
    include __DIR__ . "/../View/index/index.php";
  }

  public function loginAction(): void
  {
    include __DIR__ . "/../View/index/login.php";
  }
}
