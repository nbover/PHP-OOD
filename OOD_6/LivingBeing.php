<?php
//constans globals
  define('EATING_CAPABILITY',array('meat','vegs','meat and vegs'));
  define('MOVING_CAPABILITY',array('walk','fly'));
  define('SPEAKING_CAPABILITY',array('guau','miau','language'));

  class LivingBeing {
    //constans de classe
    const GENDER=array('female','male','helicoptero de combate');
    const STATUS=array('awake','sleeping');
    //propietats
      public $age; // : available from everywhere
      private $status; //  available from current class only
      private $gender; //  available from current class only
      private $eatingCapability; //  available from current class only
      private $movingCapability; //  available from current class only
      private $speakingCapability; //  available from current class only

    //getters & setters
    protected function setage($age){
      $this->age=$age;
    }
    protected function setstatus($status){
      $this->status=$status;
    }
    protected function setgender($gender){
      $this->gender=$gender;
    }
    protected function seteatingCapability($eatingCapability){
      $this->eatingCapability=$eatingCapability;
    }
    protected function setmovingCapability($movingCapability){
      $this->movingCapability=$movingCapability;
    }
    protected function setspeakingCapability($speakingCapability){
      $this->speakingCapability=$speakingCapability;
    }

    protected function getage(){
        return $this->age;
    }
    protected function getstatus(){
      return $this->status;
    }
    protected function getgender(){
      return $this->gender;
    }
    protected function geteatingCapability(){
      return $this->eatingCapability;
    }
    protected function getmovingCapability(){
      return $this->movingCapability;
    }
    protected function getspeakingCapability(){
      return $this->speakingCapability;
    }
    //funciones

    public function oneYearOlder(){
      $this->age=++$this->age;
    }

  }
?>
