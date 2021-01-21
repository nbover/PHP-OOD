<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class converter
{
  var $euros;
  var $exchange;
  var $pounds;
  //setters
  public function setEuros($euros)
  {
    $this->euros=$euros;
  }

  public function setExchange($exchange)
  {
    $this->exchange=$exchange;
  }

  public function setPounds($pounds)
  {
    $this->pounds=$pounds;
  }

  //getters
  public function getEuros()
  {
    return $this->euros;
  }

  public function getExchange()
  {
    return $this->exchange;
  }

  public function getPounds()
  {
    return $this->pounds;
  }


  public function print()
  {
    echo "<b>Euros:</b> " . $this->getEuros();
    echo "<br>";
    echo "<b>Surname1:</b> " . $this->getExchange();
    echo "<br>";
    echo "<b>Surname2:</b> " . $this->getPounds();
  }

  function __construct($euros,$exchange,$pounds) {
    $this->euros=$euros;
    $this->exchange=$exchange;
    $this->pounds=$pounds;
  }

}//end class Student

$converter1=new converter(180,0.89,170);//creating object using a default constructor
$converter1->print();



?>
</body>
</HTML>
