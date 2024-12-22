<?php

declare(strict_types=1);

require_once './Student.php';

use App\Student;

$student = new Student('Андрей', 'Семёнов', 42, ['HTML', 'CSS', 'JS', 'PHP']);

$student->printStudent();
