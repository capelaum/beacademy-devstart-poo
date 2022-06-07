<?php

declare(strict_types=1);

class GeralManager extends Manager
{
  private float $anualBonus;

  /**
   * Get the value of anualBonus
   */
  public function getAnualBonus()
  {
    return $this->anualBonus;
  }

  /**
   * Set the value of anualBonus
   *
   * @return  self
   */
  public function setAnualBonus($anualBonus)
  {
    $this->anualBonus = $anualBonus;

    return $this;
  }
}
