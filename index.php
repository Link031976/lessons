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

//8,9
$workers[]= new Employee('eric',25,1000);
$workers[]= new Employee('kyle',30,2000);

//10
$summ=0;
for($i=0;$i<count($workers);$i++)
    {
        $summ=$summ+$workers[$i]->getSalary();
    }

echo "<br> Сумарна заробітна плата ".$summ." грн.<br>";

//13
$workers[1]->setter('age',-2);
echo $workers[1]->getter('name')." йому ".$workers[1]->getter('age')."<br>";

$workers[1]->setter('age',102);
echo $workers[1]->getter('name')." йому ".$workers[1]->getter('age')."<br>";

$workers[1]->setter('age',50);
echo $workers[1]->getter('name')." йому ".$workers[1]->getter('age')."<br>";