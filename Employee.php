<?php
class Employee
    {
        public readonly string $name;
        public readonly string $surname;      
        private $salary;//зарплата

        public function __construct($a,$b,$c)
        {
            $this->name=$a;
            $this->surname=$b;
            $this->salary=$c;
        }
    }