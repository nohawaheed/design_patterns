<?php

use App\OOP\Employee;

require_once __DIR__ . '/../vendor/autoload.php';

$employee = New Employee("noha", 25, 1000, "developer");
var_dump($employee);