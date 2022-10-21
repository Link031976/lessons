<?php
class User 
    {
        public $name;//Ім'я
        public $age ;//Вік

        public function setAge($a) // переопреділення setAge
            {
                if ($a>=18) $this->age=$a;
            }

        public function show($a)
            {
                return $this->$a;
            }
        
    }
