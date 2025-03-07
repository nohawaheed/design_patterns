<?php
namespace App\OOP\Concepts;

class Employee
{
    private string $name;
    private int $age;
    private int $salary;
    private string $position;

    
    /**
     * Employee constructor.
     *
     * @param string $name The name of the employee.
     * @param int $age The age of the employee.
     * @param int $salary The salary of the employee.
     * @param string $position The position of the employee.
     */
    public function __construct(string $name, int $age, int $salary, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->position = $position;
    }

    /**
     * Gets the name of the employee.
     *
     * @return string The name of the employee.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Gets the age of the employee.
     *
     * @return int The age of the employee.
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Gets the salary of the employee.
     *
     * @return int The salary of the employee.
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * Gets the position of the employee.
     *
     * @return string The position of the employee.
     */
    public function getPosition(): string
    {
        return $this->position;
    }
}