<html>
<head>
<title>OOD_6: inheritance exercise</title>
</head>
<body>
<?php
require "LivingBeing.php";
require "PersonOOD6.php";

$LivingBeing1=new LivingBeing();
$person1= new PersonOOD6("Nicolau");

echo $person1->print();

 ?>
</body>
</html>
