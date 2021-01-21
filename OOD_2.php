<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class Student
{
  var $name;
  var $dni;
  var $surname1;
  var $surname2;
  var $age;

  //setters
  public function setName($name)
  {
    $this->name=$name;
  }

  public function setDni($dni)
  {
    $this->dni=$dni;
  }

  public function setSurname1($surname1)
  {
    $this->surname1=$surname1;
  }

  public function setSurname2($surname2)
  {
    $this->surname2=$surname2;
  }

  public function setAge($age)
  {
    $this->age=$age;
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

  public function getSurname1()
  {
    return $this->surname1;
  }

  public function getSurname2()
  {
    return $this->surname2;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function print()
  {
  echo "Name: $this->name <br>";
  echo "Surname1:". $this->getSurname1()."<br>";
  echo "Surname2:". $this->getSurname2()."<br>";
  echo "Dni: $this->dni <br>";
  echo "Age: $this->age <br><br>";
  }

  function __construct($name,$dni,$surname1,$surname2,$age) {
    $this->name=$name;
    $this->dni=$dni;
    $this->surname1=$surname1;
    $this->surname2=$surname2;
    $this->age=$age;
  }

}//end class Student

$alumne1=new Student('Imena','23344556D','Garcia','Lopez',19);//creating object using a default constructor

echo "<b>Name:</b> " . $alumne1->getName();
echo "<br>";
echo "<b>Surname1:</b> " . $alumne1->getSurname1();
echo "<br>";
echo "<b>Surname2:</b> " . $alumne1->getSurname2();
echo "<br>";
echo "<b>Dni:</b> " . $alumne1->getDni();
echo "<br>";
echo "<b>Age:</b> " . $alumne1->getAge();


?>
</body>
</HTML>
