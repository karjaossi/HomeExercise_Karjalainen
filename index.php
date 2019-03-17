<?php


    spl_autoload_register(function ($class_name) {
        include $class_name . ".php";
    });


    echo "<h2>Students</h2>";
    $Student1 = new Students("Rasmus","Kupari","2000","90");
    $Student1->setCourses("CSS Introduction");
    $Student1->setCourses("Professional English");
    $coursesOfStudent1=$Student1->getCourses();
    echo "Student ".$Student1->getfirstName()." ".$Student1->getlastName()." is currently " .$Student1->getAge()." years old and the person is studying ".json_encode($coursesOfStudent1).". <br>";


    echo "<h2>Teachers</h2>";
    $Teacher1 = new Teacher("Jussi", "Jokinen", "1983", "OAMK");
    $Teacher1->setteachingSubjects("Work Enviorment Team Building");
    $Teacher1->setteachingSubjects("Physics");
    $subjectsOfTeacher1=$Teacher1->getteachingSubjects();
    echo "Teacher ".$Teacher1->getFirstName()." ".$Teacher1->getLastName()." is currently " .$Teacher1->getAge()." years old and the person teaches at ".$Teacher1->getDepartment().". <br>";
    echo "Person's primary subjects are ".json_encode($subjectsOfTeacher1).". <br>";


    echo "<h2>Staff</h2>";
    $Staff1 = new Staff("Ville", "Leskinen", "1994", "Cleaner");
    echo "Staff member ".$Staff1->getFirstName()." ".$Staff1->getLastName()." is currently ".$Staff1->getAge()." years old and is working as a ".$Staff1->getVacancy().". <br>";

    $Staff2 = new Staff("Veini", "Vehviläinen", "1997", "Caretaker");
    echo "Staff member ".$Staff2->getFirstName()." ".$Staff2->getLastName()." is currently ".$Staff2->getAge()." years old and is working as a ".$Staff2->getVacancy().". <br>";
?>
