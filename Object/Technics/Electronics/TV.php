<?php

declare(strict_types=1);

namespace Object\Technics\Electronics;

class TV
{
  public static function tvTurnOn(): void
  {
    echo 'TV is turned on' . PHP_EOL;
  }

  public static function tvTurnOff(): void
  {
    echo 'TV is turned off' . PHP_EOL;
  }

  public string $brand;
  public bool $isOn = false;

  public function __construct(string $brand)
  {
    $this->brand = $brand;
  }

  public function turnOn(): void
  {
    self::tvTurnOn();
    $this->isOn = true;
  }

  public function turnOff(): void
  {
    self::tvTurnOff();
    $this->isOn = false;
  }

  public function __toString(): string
  {
    return "TV: {$this->brand}, status: " . ($this->isOn ? 'on' : 'off');
  }

  public function printTV(): void
  {
    echo $this->__toString() . PHP_EOL;
  }
}
