<?php


require_once('employee.php');
require_once('user.php');
require_once('user_user.php');
require_once('rectangle.php');
require_once('student.php');

$stud[1]= new Student;
$stud[1]->name="Петро";
$stud[1]->course=2;

$stud[2]= new Student;
$stud[2]->name="Ігор";
$stud[2]->course=5;

for($i=1;$i<=count($stud);$i++)
    {
        echo $stud[$i]->name.' з '.$stud[$i]->course." курсу переведено на ";
        $stud[$i]->transferToNextCourse();
        echo $stud[$i]->course." курс <br>";
    }
