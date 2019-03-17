<?php
/**
 *
 */
abstract class Person
{

  private $fname;
  private $lname;
  private $yobirth;

  public function setfirstName($value)
  {
    $this->fname=$value;
  }
  public function setlastName($value)
  {
    $this->lname=$value;
  }
  public function setyearOfBirth($value)
  {
    $this->yobirth=$value;
  }
  public function getfirstName()
  {
    return $this->fname;
  }
  public function getlastName()
  {
    return $this->lname;
  }
  public function getyearOfBirth()
  {
    return $this->yobirth;
  }
  public function getAge()
  {
    $this_year=date("Y");
    $age=$this_year - $this->getyearOfBirth();
    return $age;
  }
}


 ?>
