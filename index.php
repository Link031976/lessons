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
            {echo "Працівник ".$this->name;}

        public function getAge() //повернення віку
            {return $this->age;}

        public function getSalary() // повернення рівня зп
            {return $this->salary;}

        public function checkAge() //перевірка на повноліття
            {
                if ($this->$age>18) return TRUE;
                   else return FALSE;
            }

        public function doubleSalary()
            {$this->salary=$this->salary*2;}
    }

    class User 
    {
        public $name;//Ім'я
        public $age ;//Вік

        public function setAge($a) // переопреділення setAge
        {
            if ($a>=18) $this->age=$a;
        }
    }

    class Rectangle
    {
        public $a;
        public $b;

        public function Rectangle()
            {return $this->a*$this->b;}
            
        public function getPerimeter()
            {return ($this->a+$this->b)*2;}
    }

$user1=new Employee('John',25,1000); //створення об'єкту work1 класу Employee
$user2=new Employee('urik',26,2000); //створення об'єкту work2 класу Employee
        
echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";

$john = new User;
$john->age=25;

$john->setAge(30);
echo "john ".$john->age." років<br>";

