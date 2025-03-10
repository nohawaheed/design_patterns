<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\OOP\Concepts\Employee;
use App\OOP\Concepts\BankAccount;
use App\OOP\Concepts\CarDashboard;
use App\OOP\Concepts\Ford;


$ford = New Ford("ford", "2021", 2021, 60, 4, "red", 100000);
$ford->drive();
$ford->stop();
$dashboard = New CarDashboard(100, 100, 100);
// $ford->installDashboard($dashboard);
var_dump($ford->getDashboardInfo());

$employee = New Employee("noha", 25, 1000, "developer");
var_dump($employee->getAge());
$bankAccount = New BankAccount(2000, "123456", "noha");
var_dump($bankAccount->getBalance());
$bankAccount->deposit(1000);
var_dump($bankAccount->getBalance());
$bankAccount->withdraw(500);
var_dump($bankAccount->getBalance());

