<?php
define ('TIPUS_ACTIVITATS',array('senderisme','equitació','ciclisme'));

class RuralAcc extends Accommodation{
  const INST_AIRE_LLIURE=array('jardi','muntanya','platja');

  private $orgActivitats;
  private $instAireLliure;

  //SETTERS

    protected function setorgActivitats($orgActivitats){
      $this->orgActivitats=$orgActivitats;
    }
    protected function setinstAireLliure($instAireLliure){
      $this->instAireLliure=$instAireLliure;
    }
  //GETTERS
     function getorgActivitats(){
      return $this->orgActivitats;
    }
    protected function getinstAireLliure(){
      return $this->instAireLliure;
    }
  //Construct
  public function __construct($numHabit,$menjador,$orgActivitats,$instAireLliure){
     parent::__construct($numHabit,$menjador);
     $this->orgActivitats=$orgActivitats;
     $this->instAireLliure=$instAireLliure;
   }




}

?>
