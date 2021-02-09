<?php
  Class PersonOOD6 extends LivingBeing{
    private $fullname;
    protected function setFullname($fullname){
      $this->fullname=$fullname;
    }
    protected function getFullname(){
      return $this->fullname;
    }

    //parent


    public function __construct($fullname){
      $this->fullname=$fullname;
      parent::setage(22);
      parent::setstatus(parent::STATUS[0]);
      parent::setgender(parent::GENDER[2]);
      parent::seteatingCapability(EATING_CAPABILITY[2]);
      parent::setmovingCapability(MOVING_CAPABILITY[0]);
      parent::setspeakingCapability(SPEAKING_CAPABILITY[2]);
    }

    public function print()
    {
    echo "I'm ". $this->getfullname();
    echo '<br>';
    echo "I'm ". $this->getage()." and";
    echo '<br>';
    echo "I can talk a ". $this->getspeakingCapability();
    echo '<br>';
    echo "eat ". $this->geteatingCapability();
    echo '<br>';
    echo "and ". $this->getmovingCapability();
    echo '<br>';
    echo "My status is ". $this->getstatus();
    echo '<br>';
    echo "My gender is ". $this->getgender();
    echo '<br>';
    }



  }
?>
