<?php
class Employee
{
    private $id;
    private $salary;

    public function __construct($id, $salary)
    {
        $this->id = $id;
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$employee = new Employee(1212, 50000);
echo "Salary: " . $employee->getSalary();

echo "<br/>";

$employee->setSalary(60000);
echo "New salary: " . $employee->getSalary();
