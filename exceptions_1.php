<?php
echo "<b>1. Without using exceptions</b><br>";
function discountCalculation_W($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
  if($percentage !=0){
    $discountCalculation=($price * $discount)/$percentage;

    return $price - $discountCalculation;
  }
  return "value has to be greater than 0";
}

echo discountCalculation_W(10,0,50);

echo "<hr>";
echo "<b>2. Using exceptions</b><br>";
function discountCalculation($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
  if($percentage == 0)
    throw new Exception('Divisió per zero.');
  else
    return (($price * $discount)/$percentage);
  }

  try {
    $discount = 50;
    $percentage  = 100;
    $price = 13;
    echo discountCalculation($discount,$percentage,$price);
  }
  catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
  }
?>
