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
    echo "<b>Exchange:</b> " . $this->getExchange();
    echo "<br>";
    echo "<b>Pounds:</b> " . $this->getPounds();
  }

  public function ConvertPoundsToEuros() {
    $this->pounds=$this->euros*$this->exchange;
    return $this->pounds;
  }

  function __construct($euros,$exchange) {
    $this->euros=$euros;
    $this->exchange=$exchange;
  }

}//end class Student
$euros=180;
$exchange=0;

$converter1=new converter($euros,$exchange);//creating object using a default constructor

if($exchange>0)
  $converter1->ConvertPoundsToEuros();
else {
  echo "The exchange rate has to be grater than 0<br>";
}
$converter1->print();



?>
</body>
</HTML>
