<?php
class Employee
    {
        private $name;//Ім'я
        private $age ;//Вік
        private $salary;//зарплата

        public function __construct($a,$b,$c) //конструктор
        {
            $this->name=$a;
            $this->age=$b;
            $this->salary=$c;
        }
        public function getName() //повернення ім'я
            {return $this->name;}

        public function getAge() //повернення віку
            {return $this->age;}

        public function getSalary() // повернення рівня зп
            {return $this->salary;}

        public function checkAge() //перевірка на повноліття
            {
                if ($this->age > 18) return TRUE;
                   else return FALSE;
            }

        public function doubleSalary()
            {$this->salary=$this->salary*2;}

        public function getter($name)
            {
                if ($name=='salary') return $this->salary."$";
                    else return $this->$name;
            }

        public function setter ($name,$value)
            {
                if ($name=='age') $value=$this->isAgeCorrect($value);
                $this->$name=$value;
            }

        public function isAgeCorrect($age)
            {
                if (($age>1) and ($age<100)) return $age;
                    else return $this->age;
            }
    }