<?php

declare(strict_types=1);

class Car
{
  public static function carDrive(): string
  {
    return 'Car is driving' . PHP_EOL;
  }

  public static function carStop(): string
  {
    return 'Car is stopped' . PHP_EOL;
  }

  protected int $year;
  public string $vendor;
  public string $model;

  public function __construct(int $year, string $vendor, string $model)
  {
    $this->vendor = strtoupper($vendor);
    $this->model = strtoupper($model);
    $this->setYear($year);
  }

  public function getYear(): int
  {
    return $this->year;
  }

  public function setYear(int $year): void
  {
    if ($year < 0) {
      throw new \InvalidArgumentException('Year must be positive number');
    }

    $this->year = $year;
  }

  public function drive(): string
  {
    return str_replace('Car', $this->vendor, self::carDrive());
  }

  public function stop(): string
  {
    return str_replace('Car', $this->vendor, self::carStop());
  }

  public function __toString(): string
  {
    return "Car: {$this->vendor} {$this->model}, year: {$this->year}." . PHP_EOL;
  }

  public function printCar(): void
  {
    echo $this->__toString() . PHP_EOL;
  }
}
