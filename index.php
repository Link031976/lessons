<?php
    class Employee
    {
        public $name;//Ім'я
        public $age ;//Вік
        public $salary;//зарплата
        public function __construct($a,$b,$c) //конструктор
        {
            $this->name=$a;
            $this->age=$b;
            $this->salary=$c;
        }
        public function getName() //повернення ім'я
            {echo "Ім'я працівника " $this->name;}
        public function getAge() //повернення віку
            {echo "Вік працівника " $this->age;}
        public function getSalary() // повернення рівня зп
            {return $this->salary;}
        public function checkAge() //перевірка на повноліття
            {
                if ($this->$age>18) return TRUE;
                   else return FALSE;
            }
    }

    class User 
    {
        public $name;//Ім'я
        public $age ;//Вік
        public function setAge($a) // переопреділення setAge
        {
            $this->age=$a;
        }
    }



$user1=new Employee('John',25,1000); //створення об'єкту work1 класу Employee
$user2=new Employee('urik',26,2000); //створення об'єкту work2 класу Employee

echo "Загальний вік ".$user1->age+$user2->age;
echo "<br>"."Загальна зарплата ".$user1->getAge+$user2->getAge;
$johh = new User;
$johh->age=30;