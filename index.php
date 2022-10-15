<?php


require_once('employee.php');
require_once('user.php');
require_once('user_user.php');
require_once('rectangle.php');

$user1=new Employee('John',25,1000); //bild object work1 class Employee
$user2=new Employee('urik',26,2000); //bild object work2 class Employee
        
echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";

$john = new User;
$john->age=25;

$john->setAge(30);
echo "john ".$john->age." років<br>";

$users=new UserUser;
$users->name="Микита";
$users->age=20;
echo $users->show('age');

$users->setAge(3);
echo "<br>set 3 ".$users->show('age');

$users->setAge(30);
echo "<br>set 30 ".$users->show('age');

$users->addAge(25);
echo "<br>add 25 ".$users->show('age');
