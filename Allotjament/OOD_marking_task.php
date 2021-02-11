<html>
<head>
<title>OOD_marking_task</title>
</head>
<body>
<?php
require "Hotel/Accommodation.php";
require "HotelNegocis/BusinessACC.php";
require "HotelRural/RuralAcc.php";

$rural1= new RuralAcc(10,MENJADOR[0],true,RuralAcc::INST_AIRE_LLUIRE[2]);
$business1= new BusinessAcc (1,MENJADOR[1]);
    try {
      $business1-> checkIn();
      $business1-> checkIn();
    }
    catch (Exception $e) {
        echo "Exception message is: " . $e->getMessage() . "<br>";
    }
 ?>
</body>
</html>
