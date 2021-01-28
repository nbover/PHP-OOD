<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "apprentice.php";

$teacher1=new Teacher('Rose','12345678A',10);//using __construct from Person
$teacher1->setSalary(10);
$student1=new Apprentice('Nicolau','41583366X');//using __construct from Person
$student1->setStudyField('ASIX');
$student1->setFCTBusinessName('IESManacor');

echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class

 ?>
</body>
</html>
