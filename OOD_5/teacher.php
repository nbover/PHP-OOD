<?php
class Teacher extends Person
{
public $salary;
public function setSalary($salary)
{
$this->salary=$salary;
}

public function getSalary()
{
  return $salary->salary;
}
public function __construct($name,$dni,$salary)
{
  parent::__construct($name,$dni);
  $this->salary=$salary;
}

public function print()
{
  parent::print();
  echo "<b>Salary:</b> $this->salary <br><br>";
}


}
?>
