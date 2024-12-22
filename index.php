<?php

declare(strict_types=1);

require_once 'autoload.php';

$student = new Student('Андрей', 'Семёнов', 42, ['HTML', 'CSS', 'JS', 'PHP']);
$student->printStudent();
$student->works();
