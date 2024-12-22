<?php

declare(strict_types=1);

namespace Object\Human;

class Student
{
  private const MIN_AGE = 1;
  private const ROUTINES = [
    'study' => 'учит новый материал',
    'homework' => 'выполняет домашнее задание',
    'send' => 'отправляет задание на проверку',

  ];
  private int $age;

  public string $name;
  public string $surname;
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
    if ($value < self::MIN_AGE) {
      throw new \InvalidArgumentException('Age must be positive number');
    }
    $this->age = $value;
  }

  public function getAge(): int
  {
    return $this->age;
  }

  public function works(): void
  {
    foreach (self::ROUTINES as $key => $value) {
      echo "{$this->name} {$value}." . PHP_EOL;
    }
  }
}
