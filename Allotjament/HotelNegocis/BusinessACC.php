<?php
class BusinessACC extends Accommodation{
  const SALES=array('reunions','audio visuals','internet','no');

  //propietats
  private $sales;

  //SETTERS
    protected function setsales($sales){
      $this->sales=$sales;
    }
  //GETTERS
    protected function getsales(){
      return $this->sales;
    }


    public function checkIn()
      {
        if ($this->numHabit==0)
              throw new Exception('check-in Error: Hotel complet. Operació no permesa');

             parent::checkIn();
             echo "check-in successful </br>";
      }














}
?>
