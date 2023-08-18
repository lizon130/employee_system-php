<?php
class Employee
{
    private $name;
    private $idNumber;
    private $salary;

    public function __construct($name, $idNumber)
    {
        $this->name = $name;
        $this->idNumber = $idNumber;
        $this->salary = 0; // Default salary
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;
        } else {
            echo "Invalid name format\n";
        }
    }

    public function getIdNumber()
    {
        return $this->idNumber;
    }

    public function setIdNumber($idNumber)
    {
        if (is_int($idNumber)) {
            $this->idNumber = $idNumber;
        } else {
            echo "Invalid ID format\n";
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        if (is_numeric($salary) && $salary >= 0) {
            $this->salary = $salary;
        } else {
            echo "Invalid salary format\n";
        }
    }
}

// Example usage
$employee1 = new Employee("Arman", 12345);
$employee1->setSalary(50000);

echo "Employee: " . $employee1->getName() . "\n";
echo "<br>";
echo "ID Number: " . $employee1->getIdNumber() . "\n";
echo "<br>";
echo "Salary: $" . number_format($employee1->getSalary(), 2) . "\n";
