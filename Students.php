<?php

/**
 *
 */
class Students extends Person
{

    private $selectedCourses=array();
    private $creditPoints;

    function __construct($fname=null, $lname=null, $yobirth=null, $creP=null)
    {
        $this->setfirstName($fname);
        $this->setlastName($lname);
        $this->setyearOfBirth($yobirth);
        $this->creditPoints = $creP;
    }
    public function setCourses($value)
    {
        array_push($this->selectedCourses,$value);
    }
    public function getCourses()
    {
        return $this->selectedCourses;
    }
    public function setcreditPoints($value)
    {
        $this->creditPoints = $value;
    }
    public function getcreditPoints()
    {
        return $this->creditPoints;
    }
}



 ?>
