<?php
require_once('Employee.php');
require_once('user.php');
require_once('Rectangle.php');

$user1=new Employee('John',25,1000); //створення об'єкту work1 класу Employee
$user2=new Employee('urik',26,2000); //створення об'єкту work2 класу Employee
        
echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";

$john = new User;
$john->age=25;

$john->setAge(30);
echo "john ".$john->age." років<br>";

