<?php
class Person
{
public $name;
public $dni;

//setters
public function setName($name)
{
  $this->name=$name;
}

public function setDni($dni)
{
  $this->dni=$dni;
}

//getters
public function getName()
{
  return $this->name;
}

public function getDni()
{
  return $this->dni;
}


public function __construct($name,$dni)
{
  $this->name=$name;
  $this->dni=$dni;
}

public function print()
{
  echo "<b>Name:</b> $this->name.<br>";
  echo "<b>DNI:</b> $this->dni.<br>";
}
}
?>
