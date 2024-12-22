<?php

declare(strict_types=1);


class Student
{
  public string $name;
  public string $surname;
  private int $age;
  public array $classes;

  public function __construct($name, $surname, $age, $classes = ['Не выбрано'])
  {
    $this->name = ucfirst($name);
    $this->surname = ucfirst($surname);
    $this->classes = $classes;
    $this->setAge($age);
  }

  public function __toString(): string
  {
    return "Student: {$this->name} {$this->surname}, age: {$this->age}, classes: " . implode(", ", $this->classes);
  }

  public function getFullName(): string
  {
    return "{$this->name} {$this->surname}";
  }

  public function printStudent(): void
  {
    echo $this->__toString() . PHP_EOL;
  }

  public function setAge(int $value): void
  {
    if ($value < 0) {
      throw new \InvalidArgumentException('Age must be positive number');
    }
    $this->age = $value;
  }

  public function getAge(): int
  {
    return $this->age;
  }
}
