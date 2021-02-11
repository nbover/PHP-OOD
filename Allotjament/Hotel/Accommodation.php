<?php
define ('MENJADOR', array('casa','a la carta','buffet','no'));

class Accommodation{
  public $numHabit;
  private $menjador;

  //SETTERS
    protected function setnumHabit($numHabit){
      $this->numHabit=$numHabit;
    }
    protected function setmenjador($menjador){
      $this->menjador=$menjador;
    }
  //GETTERS
    protected function getnumHabit(){
      return $this->numHabit;
    }
    protected function getmenjador(){
      return $this->menjador;
    }
  //Construct
    public function __construct($numHabit,$menjador){
      $this->numHabit=$numHabit;
      $this->menjador=$menjador;
    }
  //metodes
    public function checkIn(){
      $this->numHabit=--$this->numHabit;
    }
    public function checkOut(){
      $this->numHabit=--$this->numHabit;
    }

    public function __construct($numHabit,$menjador)
    {
    $this->numHabit=$numHabit;
    $this->menjador=$menjador;
    }
}

?>
