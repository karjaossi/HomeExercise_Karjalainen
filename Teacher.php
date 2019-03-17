<?php
class Teacher extends Person
{
    private $teachingSubjects=array();
    private $department;

    function __construct($fname=null, $lname=null, $yobirth=null, $dep=null)
    {
        $this->setfirstName($fname);
        $this->setlastName($lname);
        $this->setyearOfBirth($yobirth);
        $this->department=$dep;
    }
    public function setteachingSubjects($value)
    {
        array_push($this->teachingSubjects,$value);
    }
    public function getteachingSubjects()
    {
        return $this->teachingSubjects;
    }
    public function setDepartment($value)
    {
        $this->department=$value;
    }
    public function getDepartment()
    {
        return $this->department;
    }
}
?>
