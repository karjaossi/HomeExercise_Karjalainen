<?php
class Staff extends Person
{
  private $vacancy;

  function __construct($fname=null, $lname=null, $yobirth=null, $vac=null)
  {
    $this->setfirstName($fname);
    $this->setlastName($lname);
    $this->setyearOfBirth($yobirth);
    $this->vacancy=$vac;
  }
  public function setVacancy($value)
  {
    $this->vacancy=$value;
  }
  public function getVacancy()
  {
    return $this->vacancy;
  }
}
?>
